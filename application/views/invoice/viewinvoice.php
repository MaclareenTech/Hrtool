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

        .red-strip{
            margin-bottom:-18px;
        }

        .red-strip img {
            height: 49px !important;
            width: 100% !important;
            margin-top: 20px;
            margin-bottom: 20px;
        }

        .invoice-container {
            width: 700px;
            /* Adjust this value to change the container width */
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

        th,
        td {
            /* border: 1px solid #ccc; */

            text-align: left;
            min-height: 50px;
            /* Set your desired minimum height here */
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

        /* Center the content horizontally */
        .centered-content {
        text-align: center;
        }

        .centered-content h4{
            margin-bottom:-4px;
            margin-top:13px;
        }
        /* disclaimer the content horizontally */
        .disclaimer-content {
        text-align: right;
        }

        /* Reduce top and bottom margin of the centered-content */
        .disclaimer-content p {
        margin-top: 0;
        margin-bottom: 0;
        }

        /* Style for the red text */
        .disclaimer-content b {
        color: red;
        font-size: 10px;
        }
    </style>

</head>

<body>
    <div class="invoice-container">
        <div class="red-strip"><img src="https://maclareenai.com/mtas/assets/images/invoice.png" alt=""></div>
        <div class="centered-content"> <h4 style="font-size: 23px;">INVOICE</h4></div>

       


        <h4 style="font-size: 20px;margin-bottom:10px;margin-top:10px;">Bill To</h4>
            <table class="invoice-items">
                <tr>
                    <td style="width: 50%;"><b>Maclareen Consulting India Pvt. Ltd. </b></td>
                    <td colspan="2" style="text-align: left;"><b>GSTIN / UIN : 27AANCM5396F1ZY </b></td>
                </tr>
                <tr>
                    <td rowspan="4" style="text-align: left; line-height: 1.3; word-wrap: break-word;">
                        <b> 110, Lodha Supremus 2, Rd Number 22</b><br>
                        Besides New Passport Office, <br>
                        Wagle Industrial Estate <br>
                        Thane West, 400604 
                    </td>
                    <td colspan="2" style="text-align: left;"><b>State Name: Maharashtra </b></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: left;"><b>Email : info@maclareen.com </b></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: left;"><b>CIN : U74140MH2020PTC341437</b></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: left;"><b>Code : 27 </b></td>
                </tr>
            </table>

     

        <h4 style="font-size: 20px;margin-bottom:10px;">Ship To</h4>
        <div class="table-responsive">

            <table class="invoice-items">
                <tr>
                    <td style="width: 50%;"><b>Company's Name : <?php echo $user[0]->candidate_company_name ?> </b></td>
                    <td colspan="2" style="text-align: left;"><b>Invoice No. : <?php echo $user[0]->invoiceNumber ?> </b></td>
                </tr>
                <tr>
                    <td rowspan="4" style="text-align: left; line-height: 1.3; word-wrap: break-word;">
                        <b> <?php echo $user[0]->candidate_name ?> </b><br>
                        <?php echo $user[0]->candidate_address ?> <br>
                        <?php echo $user[0]->candidate_number ?> <br>
                        <?php echo $user[0]->candidate_mail ?>
                    </td>
                    <td colspan="2" style="text-align: left;"><b>Invoice Date : <?php echo $user[0]->invoiceDate ?> </b></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: left;"><b>Mode Of Payment : <?php echo $user[0]->payment_mode ?> </b></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: left;"><b>Company’s Pan : <?php echo $user[0]->candidate_company_pan ?> </b></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: left;"><b>Company’s GST : <?php echo $user[0]->candidate_gstin_no ?> </b></td>
                </tr>
            </table>


            <br>
            <table class="invoice-items">
                <thead>
                    <tr>
                        <th style="width: 10%;">SR. NO.</th>
                        <th style="width: 50%;">Particulars</th>
                        <th style="width: 10%;">HSN/SAC</th>
                        <th style="width: 10%;">GST Rate</th>
                        <th style="width: 10%;">Rate</th>
                        <th style="width: 10%;">Total</th>
                    </tr>
                </thead>
                <tbody id="myTable">
                    <?php $counter = 0; ?>
                    <?php foreach ($dataArray as $row) : ?>
                        <tr>
                            <?php $counter++; ?>
                            <td><?php echo $counter; ?></td>
                            <td><?php echo $row->particular ?></td>
                            <td><?php echo $row->hsn ?></td>
                            <td><?php echo $row->gstRate ?></td>
                            <td><?php echo $row->amount ?></td>
                            <td><?php echo $row->amountwithGST ?></td>


                        </tr>
                    <?php endforeach; ?>
                </tbody>

                <tfoot>
                    <!-- "Total" row -->
                    <tr>
                        <td colspan="3" class="text-center"><b>Total Amount Received Without GST</b></td>
                        <td colspan="4"> <?php echo $user[0]->total_amount ?> </td>
                        <!-- Empty cell for "Remove" column in the total row -->
                    </tr>
                    <tr>
                        <td colspan="3" class="text-center"><b>Total Amount Received With GST</b></td>
                        <td colspan="4"> <?php echo $user[0]->invoice_amount_with_gst ?> </td>
                        <!-- Empty cell for "Remove" column in the total row -->
                    </tr>

                    <!-- "Amount In Words" row -->
                    <tr>
                        <td colspan="3" class="text-center"><b>Amount Chargeable (In Words)</b>:</td>
                        <td colspan="4"> <?php echo $user[0]->total_amount_words ?> </td>
                        <!-- Empty cell for "Remove" column in the Amount In Words row -->
                    </tr>
                </tfoot>
            </table>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            

          
            <br>


        </div>

        <!-- <center>
            <p><b style="color: red; font-size: 10px;">This Invoice is generated electronically. No signature required.</b></p>
        </center> -->
        <div class="disclaimer-content">
            <p><b>*This Invoice is generated electronically. No signature required.</b></p>
        </div>
    </div>
</body>

</html>