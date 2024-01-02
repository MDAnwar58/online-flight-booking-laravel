<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\ContactInfo;
use App\Models\Flight;
use App\Models\FlightBooking;
use App\Models\PersonalInfo;
use App\Models\SelectFLight;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FlightBookingController extends Controller
{
    function flightBooking(Request $request)
    {
        if (isset($request->flight_id[0]) && isset($request->flight_id[1])) {
            $departure_flight = Flight::where('id', $request->flight_id[0])->first();
            $return_flight = Flight::where('id', $request->flight_id[1])->first();
        } else {
            $departure_flight = Flight::where('id', $request->flight_id)->first();
            $return_flight = "";
        }

        $person = $request->person;
        $contactInfo = ContactInfo::where('user_id', Auth::user()->id)->first();
        $personalInfo = PersonalInfo::where('user_id', Auth::user()->id)->first();

        return view('pages.frontend.booking.index', compact('departure_flight', 'return_flight', 'person', 'contactInfo', 'personalInfo'));
    }
    function flightBookingContinue(Request $request)
    {
        $flight_id = implode(", ", $request->flight_id);
        
        if ($request->payment_method == 'sslcommerz') {

            $personalInfo = PersonalInfo::updateOrCreate(
                ["user_id" => $request->user_id],
                [
                    "user_id" => $request->user_id,
                    "passport_number" => $request->passport_number,
                    "port_expiry_date" => $request->port_expiry_date,
                ]
            );
            $contactInfo = ContactInfo::updateOrCreate(
                ["user_id" => $request->user_id],
                [
                    "user_id" => $request->user_id,
                    "email" => $request->email,
                    "phone" => $request->phone,
                    "date_of_birth" => $request->date_of_birth,
                    "address" => $request->address,
                    "city" => $request->city,
                    "country" => $request->country,
                    "frequent_flyer_number" => $request->frequent_flyer_number
                ]
            );

            FlightBooking::create(
                [
                    'user_id' => $request->user_id,
                    'contact_info_id' => $contactInfo->id,
                    'person_info_id' => $personalInfo->id,
                    'flight_id' => $flight_id,
                    'person' => $request->person,
                    'currency' => "BDT",
                    'taxes' => $request->taxes,
                    'total_pay' => $request->total_pay,
                    'payment_method' => $request->payment_method
                ]
            );

            $amount = 6000;

            /* PHP */
            $post_data = array();
            $post_data['store_id'] = "onlin653f331027214";
            $post_data['store_passwd'] = "onlin653f331027214@ssl";
            $post_data['total_amount'] = $amount;
            $post_data['currency'] = "BDT";
            $post_data['tran_id'] = "SSLCZ_TEST_" . uniqid();
            $post_data['success_url'] = "http://localhost:8000/success";
            $post_data['fail_url'] = "http://localhost:8000/fail";
            $post_data['cancel_url'] = "http://localhost:8000/cancel";
            # $post_data['multi_card_name'] = "mastercard,visacard,amexcard";  # DISABLE TO DISPLAY ALL AVAILABLE

            # EMI INFO
            $post_data['emi_option'] = "1";
            $post_data['emi_max_inst_option'] = "9";
            $post_data['emi_selected_inst'] = "9";

            # CUSTOMER INFORMATION
            $post_data['cus_name'] = "Test Customer";
            $post_data['cus_email'] = "test@test.com";
            $post_data['cus_add1'] = "Dhaka";
            $post_data['cus_add2'] = "Dhaka";
            $post_data['cus_city'] = "Dhaka";
            $post_data['cus_state'] = "Dhaka";
            $post_data['cus_postcode'] = "1000";
            $post_data['cus_country'] = "Bangladesh";
            $post_data['cus_phone'] = "01711111111";
            $post_data['cus_fax'] = "01711111111";

            # SHIPMENT INFORMATION
            $post_data['ship_name'] = "testonlinn1lc";
            $post_data['ship_add1 '] = "Dhaka";
            $post_data['ship_add2'] = "Dhaka";
            $post_data['ship_city'] = "Dhaka";
            $post_data['ship_state'] = "Dhaka";
            $post_data['ship_postcode'] = "1000";
            $post_data['ship_country'] = "Bangladesh";

            # OPTIONAL PARAMETERS
            $post_data['value_a'] = "ref001";
            $post_data['value_b '] = "ref002";
            $post_data['value_c'] = "ref003";
            $post_data['value_d'] = "ref004";

            # CART PARAMETERS
            $post_data['cart'] = json_encode(
                array(
                    array("product" => "DHK TO BRS AC A1", "amount" => "200.00"),
                    array("product" => "DHK TO BRS AC A2", "amount" => "200.00"),
                    array("product" => "DHK TO BRS AC A3", "amount" => "200.00"),
                    array("product" => "DHK TO BRS AC A4", "amount" => "200.00")
                )
            );
            $post_data['product_amount'] = "100";
            $post_data['vat'] = "5";
            $post_data['discount_amount'] = "5";
            $post_data['convenience_fee'] = "3";


            // send payment request
            # REQUEST SEND TO SSLCOMMERZ
            $direct_api_url = "https://sandbox.sslcommerz.com/gwprocess/v3/api.php";

            $handle = curl_init();
            curl_setopt($handle, CURLOPT_URL, $direct_api_url);
            curl_setopt($handle, CURLOPT_TIMEOUT, 30);
            curl_setopt($handle, CURLOPT_CONNECTTIMEOUT, 30);
            curl_setopt($handle, CURLOPT_POST, 1);
            curl_setopt($handle, CURLOPT_POSTFIELDS, $post_data);
            curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($handle, CURLOPT_SSL_VERIFYPEER, FALSE); # KEEP IT FALSE IF YOU RUN FROM LOCAL PC


            $content = curl_exec($handle);

            $code = curl_getinfo($handle, CURLINFO_HTTP_CODE);

            if ($code == 200 && !(curl_errno($handle))) {
                curl_close($handle);
                $sslcommerzResponse = $content;
            } else {
                curl_close($handle);
                echo "FAILED TO CONNECT WITH SSLCOMMERZ API";
                exit;
            }

            # PARSE THE JSON RESPONSE
            $sslcz = json_decode($sslcommerzResponse, true);

            if (isset($sslcz['GatewayPageURL']) && $sslcz['GatewayPageURL'] != "") {
                # THERE ARE MANY WAYS TO REDIRECT - Javascript, Meta Tag or Php Header Redirect or Other
                # echo "<script>window.location.href = '". $sslcz['GatewayPageURL'] ."';</script>";
                echo "<meta http-equiv='refresh' content='0;url=" . $sslcz['GatewayPageURL'] . "'>";
                # header("Location: ". $sslcz['GatewayPageURL']);
                exit;
            } else {
                echo "JSON Data parsing error!";
            }

        } else {
            return back()->with('error', 'please select SSLCommerz payment method');
        }
    }
}
