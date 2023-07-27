<!DOCTYPE html>
<html>
<head>
    <title>Maclareen Consign India Pvt Ltd</title>
    <style>
        /* .container {
            display: flex;
            justify-content: space-between;
        } */

        .address {
            margin-bottom: 10px;
        }
        .label {
            font-weight: bold;
        }
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        
        /* .red-strip {
          height: 45px;
          background-color: red;
          width: 100%;
          margin-top: 100px;
          margin-bottom: 20px;
        } */
        /* .red-strip {
        height: 50px;
        
        width: calc(100% + 40px); 
        margin-left: 20px; 
        margin-right: 20px;
        margin-top: 20px;
        margin-bottom: 20px;
        } */

        .red-strip img{
        height: 60px;
        width: calc(100% ); 
        /* margin-left: 10px; 
        margin-right: 10px; */
        margin-top: 20px;
        margin-bottom: 20px;
        }   

        .invoice-container {
            width: 700px; /* Adjust this value to change the container width */
            margin: 20px auto;
            border: 1px solid #000;
            padding: 20px;
        }

        .invoice-details {
            margin-bottom: 20px;
            margin-left: -10px;

        }

        .invoice-details table {
            width: 40%;
            display: inline-block;
            margin: 10px;
        }

        .invoice-details th {
            text-align: left;
            /* padding-right: px; */
        }

        /* .invoice-details td {
            padding-bottom: 1px;
        } */

        .invoice-items {
            width: 100%;
            border-collapse: collapse;
        }

        .invoice-items th,
        .invoice-items td {
            border: 1px solid #000;
            padding: 10px;
            text-align: center;
        }

        /* .invoice-items th{
          color: red;
        } */

        .invoice-total {
            text-align: right;
            font-size: 18px;
            font-weight: bold;
        }
        
        table li {
            text-align: left;
        }
        table {
        border-collapse: collapse;
        width: 100%;
        }

        th, td {
        /* border: 1px solid #ccc; */
        
        text-align: left;
        min-height: 50px; /* Set your desired minimum height here */
        word-wrap: break-word;
        }

        /* Optional: Add some styling to the table header */
        /* th {
        background-color: #f2f2f2;
        font-weight: bold;
        } */
        /* td{
            background-color: #f2f2f2;
        } */
    </style>
</head>
<body>
    <div class="invoice-container">
        <div class="red-strip"><img src="C:\Users\User\Downloads\invoice-logo-strip.png" alt=""></div>
        <h4>Bill To</h4>

        <table>
            <tr>
                <th>Maclareen Consign India Pvt Ltd</th>
            </tr>
            <tr>
                <td>110, Lodha Supremus 2, Rd Number 22, Besides New Passport Office, Wagle Industrial Estate,Thane West, 400604</td>
            </tr>
        </table>
        <div class="invoice-details">
    
        <table>
            <tr>
                <th>GSTIN / UIN : </th>
                <td>27AANCM5396F1ZY</td>
            </tr>
            <tr>
                <th>State Name:</th>
                <td>Maharashtra</td>
            </tr>
            <tr>
                <th>Phone No. :</th>
                <td>1234567890</td>
            </tr>
        </table>
        
        <table>
            <tr>
                <th>CIN :</th>
                <td>U74140MH2020PTC341437</td>
            </tr>
            <tr>
                <th>Code :</th>
                <td>27</td>
            </tr>
            <tr>
                <th>Email :</th>
                <td>info@maclareen.com</td>
            </tr>
        </table>    
    </div>
    <h4>Ship To</h4>
        <div class="table-responsive">

            <table class="invoice-items">
                <tr>
                    <td colspan="2" style="text-align: left;"><b>Company's Name :</b></td>  
                </tr>
                <tr>
                  <td style="width: 50%;"><b>Customer Details</b></td>  
                  <td style="text-align: left;"><b>Invoice No. :</b></td>  
                </tr>
                <tr>
                    <td rowspan="4" style="text-align: left; line-height: 1.3;word-wrap: break-word; "><b>Nisha Minsariya</b><br>Akshya Nagar 1st Block 1st Cross,Rammurthy nagar, Bangalore-560016 <br>0987654321<br>info@maclareen.com</td>  
                    <td colspan="2" style="text-align: left;"><b>Invoice Date :</b></td>
                  </tr>
                  <tr>
                    <td colspan="2" style="text-align: left;"><b>Mode Of Payment :</b></td>
                  </tr>
                  <tr>
                    <td colspan="2" style="text-align: left;"><b>Terms :</b></td>
                  </tr>
                  <tr>
                    <td colspan="2" style="text-align: left;"><b>Client's GST :</b></td>
                  </tr>
              </table>
              <br>
            <table class="invoice-items">
                <thead>
                    <tr>
                        <th style="width: 2%;">SR. NO.</th>
                        <th style="width: 50%;">Particulars</th>
                        <th style="width: 20%;">HSN/SAC</th>
                        <th>GST Rate</th>
                        <th>Amount</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td padding: 19px;></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                      <td></td>
                      <td colspan="2"><b>Total Amount Received</b></td>
                      <td colspan="2"></td>
                    </tr>
                    <tr>
                      <td colspan="3" style="text-align: left;">Amount Chargable (In Words)</td>
                      <td colspan="2"></td>
                    </tr>
                    <tr>
                        <td colspan="5" style='padding: 15px;'></td>
                    </tr>
                </tbody>
            </table>    
            <table class="invoice-items">
                <tbody>
                    <tr>
                        <td colspan="2" style="width: 40%;">HSN/SAC</td>
                        <td style="width: 18%;">Taxable Value</td>
                        <td colspan="2">Integrated Tax</td>
                        <td  style="width: 21%;">Total Tax Amount</td>
                    </tr>
                    <tr>
                        <td colspan="2"></td>
                        <td></td>
                        <td  style="width: 18%;">Rate</td>
                        <td>Amount</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="2">Total</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="2" style='padding: 15px;'></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td style="text-align: left; width: 21%">Company’s Pan</td>
                        <td></td>
                        <td colspan="4">For Maclareen Consulting Pvt Ltd</td>
                    </tr>

                    <tr>
                        <td colspan="2" style='padding: 19px;'></td>
                        <td colspan="4" style="padding: 15px;"></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <center><p><b>This Invoice is generated electronically. No signature required.</b></p></center>

</body>
</html>
