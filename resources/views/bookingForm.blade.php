<!DOCTYPE html>
<html>
<head>
<title>Parking Slot Booking Form</title>
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<style>
    body {
        display: flex;
        justify-content: center;
    }

    .one {
        margin-top: 70px;
        {{--  border: 3px solid rgb(0, 0, 0);  --}}
        border-radius: 0.45rem;
        background-color: #eeeeee;
        padding: 40px;
        width: 50%;
    }

    .heading {
        text-align: center;
        padding-bottom: 10px;
        font-size: 30px;
    }

</style>

<body>

    {{--  <form action="" method="POST">
        @csrf
        <div class="one">
            <h5 class="heading">LOGIN FORM</h5>

            <div class="form-outline mb-4">
                <input type="email" name="email" class="form-control" placeholder="Email address">
            </div>

            <div class="form-outline mb-4">
                <input type="password" name="password"  class="form-control" placeholder="password">
            </div>

            <div class="row"><button type="submit" class="btn btn-primary btn-block">SUBMIT</button></div>
        </div>
    </form>  --}}
    <a href="{{ route('bookingDetails') }}"><button type="submit" class="btn btn-primary">Book Slot</button></a>

    <div class="one">
        <form action="{{ route('bookingDetails') }}" method="" class="row g-3">
            @csrf

            <h5 class="heading ">Booking a Slot</h5>

            <div class="col-md-6">
                <label class="form-label">Customer Name</label>
                <input type="text" class="form-control">
            </div>
            <div class="col-md-6">
                <label class="form-label">Driving License</label>
                <input type="file" class="form-control">
            </div>
            <div class="col-md-7">
                <label class="form-label">Vehicle Number</label>
                <input type="text" class="form-control" placeholder="Eg: KL47 H 4348">
            </div>
            <div class="col-md-7">
                <label class="form-label">Select Date</label>
                <input type="date" class="form-control">
            </div>
            <div class="col-md-6">
                <label class="form-label">Start Time</label>
                <select id="inputState" class="form-select">
                    <option selected> -- select time -- </option>
                    <option>...</option>
                </select>
            </div>
            <div class="col-md-6">
                <label class="form-label">Select Hours</label>
                <select id="inputState" class="form-select">
                    <option selected> -- select hours -- </option>
                    <option>...</option>
                </select>
            </div>

            <div class="col-12">
                <a href="{{ route('bookingDetails') }}"><button type="" class="btn btn-primary">Book Slot</button></a>
            </div>

        </form>

    </div>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
