<!DOCTYPE html>
<html>
<head>
<title>Booking Details</title>
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<style>
    body {
        {{--  display: flex;
        justify-content: center;  --}}
    }

    .one {
        {{--  border: 3px solid rgb(0, 0, 0);  --}}
        {{--  border-radius: 0.45rem;  --}}
        {{--  background-color: #eeeeee;  --}}
        {{--  padding: 40px;  --}}
        {{--  width: 50%;  --}}
    }

    .heading {
        margin-top: 50px;
        text-align: center;
        padding-bottom: 20px;
        font-size: 30px;
    }

</style>

<body>
    <div class="container">
        <div>
            <h5 class="heading">Booking Details</h5>
        </div>

        <div class="one">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Customer Name</th>
                        <th scope="col">Vehicle Number</th>
                        <th scope="col">Slot Number</th>
                        <th scope="col">Appointment Number</th>
                        <th scope="col">Date</th>
                        <th scope="col">Start Time</th>
                        <th scope="col">End Time</th>
                        <th scope="col">Total Hours</th>
                        <th scope="col">Parking Fee</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($details as $item)
                     <tr>
                        <td>{{ $item->customer->name }}</td>
                        <td>{{ $item->customer->vehicle_number }}</td>
                        <td>{{ $item->slot_no }}</td>
                        {{--  Below code is done to generate last 3 digits of Appoinment Number  --}}
                        <?php
                            $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
                            $randomString = '';
                            for ($i=0; $i<3; $i++)
                            {
                                $index = rand(0, strlen($characters) - 1);
                                $randomString .= $characters[$index];
                                {{--  echo $randomString;  --}}
                            }
                        ?>
                        <td>{{ $item->slot_no.$randomString }}</td>
                        <td>{{ $item->date }}</td>
                        <td>{!! $item->start_time.':'.'00' !!}</td>
                        <td>{!! $item->end_time.':'.'00' !!}</td>
                        <td>{{ $item->hours }}</td>
                        <?php
                            $hours = $item->hours;
                            if ($hours == 1) {
                                $parkingFee = 5;
                            }
                            if ($hours == 2) {
                                $parkingFee = 8;
                            }
                            if ($hours == 3) {
                                $parkingFee = 10;
                            }
                            {{--  Any additional hour after 3 hours is supposed to be incremented by Rs.5 along with Rs.10  --}}
                            if ($hours > 3) {
                                $diff = $hours - 3;
                                $parkingFee = 10 + ($diff * 5);
                            }


                        ?>

                        <td>{{ $item->parking_fee.$parkingFee }}</td>

                    </tr>
                    @endforeach

                    {{-- /* <tr>
                        <td>Anshid P</td>
                        <td>KL47 H 4743</td>
                        <td>A01</td>
                        <td>A01AAA</td>
                        <td>01-12-2022</td>
                        <td>05.00</td>
                        <td>08.00</td>
                        <td>3 hours</td>
                        <td>Rs.10</td>
                    </tr>*/  --}}

                </tbody>
            </table>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
