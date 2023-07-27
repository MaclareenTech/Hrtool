<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Opening Data</title>
    <style>
        body {
            margin: 0;
            /* To remove default body margin */
        }

        .background-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            /* background-image: url('http://mtas.net.in/assets/images/01.png');
            background-image: url('http://mtas.net.in/assets/images/02.png');
             background-repeat: no-repeat;
            background-position: center; */


        }

        table {
            width: 750px;
            border-collapse: collapse;
            margin: 50px auto;
        }

        /* Zebra striping */
        tr:nth-of-type(odd) {
            background: #eee;
        }

        th {
            background: #3498db;
            color: white;
            font-weight: bold;
        }

        td,
        th {
            padding: 10px;
            border: 1px solid #ccc;
            text-align: left;
            font-size: 18px;
        }

        .dot {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            display: inline-block;
        }

        /* Green dot */
        .green-dot {
            background-color: green;
        }

        /* Red dot */
        .red-dot {
            background-color: red;
        }

        /* 
    Max width before this PARTICULAR table gets nasty
    This query will take effect for any screen smaller than 760px
    and also iPads specifically.
    */
        @media only screen and (max-width: 760px),
        (min-device-width: 768px) and (max-device-width: 1024px) {

            table {
                width: 100%;
            }

            /* Force table to not be like tables anymore */
            table,
            thead,
            tbody,
            th,
            td,
            tr {
                display: block;
            }

            /* Hide table headers (but not display: none;, for accessibility) */
            thead tr {
                position: absolute;
                top: -9999px;
                left: -9999px;
            }

            tr {
                border: 1px solid #ccc;
            }

            td {
                /* Behave  like a "row" */
                border: none;
                border-bottom: 1px solid #eee;
                position: relative;
                padding-left: 50%;
            }

            td:before {
                /* Now like a table header */
                position: absolute;
                /* Top/left values mimic padding */
                top: 6px;
                left: 6px;
                width: 45%;
                padding-right: 10px;
                white-space: nowrap;
                /* Label the data */
                content: attr(data-column);

                color: #000;
                font-weight: bold;
            }

        }

        /* 3D Design */
        .details {
            margin-bottom: 20px;
            padding: 20px;
            background: #f9f9f9;
            border: 1px solid #ccc;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
        }

        .details .detail-item {
            flex: 1 1 300px;
        }

        .details .detail-item h3 {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .details .detail-item p {
            font-size: 16px;
            margin: 0;
        }

        /* Button style */
        .status-button {
            background-color: transparent;
            color: black;
            border: 2px solid black;
            border-radius: 6px;
            padding: 10px 20px;
            font-size: 16px;
            box-shadow: none;
            transition: all 0.3s ease;
        }
    </style>
</head>

<body>
    <div class="background-container"></div>
    <p style="text-align: center; font-size: 20px; margin-top: 15px;">Candidate List of <b><?php $combined_value = $job[0]->job_country . ' - ' . $job[0]->job_position;
                                                                                            echo $combined_value; ?></b> Job Openings</p>



    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Candidate Name </th>
                <th>Candidate Email</th>
                <th>Candidate Mobile Number</th>
                <th>Current Status</th>
                <th>Candidate Resource</th>
                <th>Register Date</th>
            </tr>
        </thead>
        <tbody id="myTable">
            <?php $counter = 0; ?>
            <?php foreach ($candidate as $row) : ?>
                <tr>
                    <?php $counter++; ?>
                    <td><?php echo $counter; ?></td>
                    <td><?php echo $row->candidate_name ?></td>
                    <td><?php echo $row->candidate_email ?></td>
                    <td><?php echo $row->candidate_mobile_no ?></td>
                    <td>
                        <?php if ($row->candidate_job_status == "0") { ?>
                            <button class="status-button">Screening</button>
                        <?php } else if ($row->candidate_job_status == "1") { ?>
                            <button class="status-button">Waiting for document</button>
                        <?php } else if ($row->candidate_job_status == "2") { ?>
                            <button class="status-button">Sent to recruitment review</button>
                        <?php } else if ($row->candidate_job_status == "3") { ?>
                            <button class="status-button">Shortlisted</button>
                        <?php } else if ($row->candidate_job_status == "4") { ?>
                            <button class="status-button">Not selected</button>
                        <?php } else if ($row->candidate_job_status == "5") { ?>
                            <button class="status-button">Job Orientation 1</button>
                        <?php } else if ($row->candidate_job_status == "6") { ?>
                            <button class="status-button">Job Orientation 2</button>
                        <?php } else if ($row->candidate_job_status == "7") { ?>
                            <button class="status-button">Job Orientation 3</button>
                        <?php } else if ($row->candidate_job_status == "8") { ?>
                            <button class="status-button">Work permit</button>
                        <?php } else if ($row->candidate_job_status == "9") { ?>
                            <button class="status-button">Visa filing</button>
                        <?php } else if ($row->candidate_job_status == "10") { ?>
                            <button class="status-button">Training for visa</button>
                        <?php } else if ($row->candidate_job_status == "11") { ?>
                            <button class="status-button">Completed</button>
                        <?php } ?>
                    </td>
                    <td>
                        <?php
                        echo $row->source_name;
                        ?>

                    </td>
                    <td>
                        <?php
                        $timestamp = strtotime($row->candidate_join_date);
                        $humanReadableDate = date("d F Y", $timestamp);
                        echo $humanReadableDate;
                        ?>
                    </td>


                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>