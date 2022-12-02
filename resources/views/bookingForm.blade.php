<!DOCTYPE html>
<html>
<head>
<title>Parking Slot Booking Form</title>
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<style>
    {{--  body {
        display: flex;
        justify-content: center;
    }  --}}

    .one
    {
        margin-top: 70px;
    }

    .form-one
    {
        border-radius: 0.45rem;
        background-color: #eeeeee;
        padding: 40px;
        width: 50%;
        margin-left: auto;
        margin-right: auto;
    }

    .heading
    {
        text-align: center;
        padding-bottom: 10px;
        font-size: 30px;
    }


    span {
        color: red;
        display:block;
        {{--  margin-top: 10px;  --}}
    }

</style>

<body>
    <div class="container">

        {{--  <a href="{{ route('bookingDetails') }}"><button type="submit" class="btn btn-primary">Book Slot</button></a>  --}}

        <div class="one">
            <form action="" method="POST" class="row g-3 form-one">
                @csrf

                <h5 class="heading ">Booking a Slot</h5>

                <div class="col-md-6">
                    <label class="form-label">Customer Name</label>
                    <input type="text" name="customer_name" class="form-control">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Driving License</label>
                    <input type="file" name="driving_license" class="form-control">
                    <span></span>
                </div>
                <div class="col-md-7">
                    <label class="form-label">Vehicle Number</label>
                    <input type="text" name="vehicle_number" class="form-control" placeholder="Eg: KL47 H 4348">
                </div>
                <div class="col-md-7">
                    <label class="form-label">Select Date</label>
                    <input type="date" name="date" class="form-control">
                </div>
                <div class="col-md-5">
                    <label class="form-label">Slot Number</label>
                    <select name="slot_number" id="inputState" class="form-select">
                        <option selected> -- select slot number -- </option>
                        @foreach(App\Models\Slot::all() as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Start Time</label>
                    <select name="start_time" id="inputState" class="form-select">
                        <option selected> -- select start time -- </option>
                        <option value="1">01:00</option>
                        <option value="2">02:00</option>
                        <option value="3">03:00</option>
                        <option value="4">04:00</option>
                        <option value="5">05:00</option>
                        <option value="6">06:00</option>
                        <option value="7">07:00</option>
                        <option value="8">08:00</option>
                        <option value="9">09:00</option>
                        <option value="10">10:00</option>
                        <option value="11">11:00</option>
                        <option value="12">12:00</option>
                        <option value="13">13:00</option>
                        <option value="14">14:00</option>
                        <option value="15">15:00</option>
                        <option value="16">16:00</option>
                        <option value="17">17:00</option>
                        <option value="18">18:00</option>
                        <option value="19">19:00</option>
                        <option value="20">20:00</option>
                        <option value="21">21:00</option>
                        <option value="22">22:00</option>
                        <option value="23">23:00</option>
                        <option value="24">24:00</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Select Hours</label>
                    {{--  <input type="number" name="hours" class="form-control">  --}}
                    <select name="hours" id="inputState" class="form-select">
                        <option selected> -- select hours -- </option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                    </select>
                </div>

                <div class="col-12">
                    <a href=""><button type="submit" class="btn btn-primary">Book Slot</button></a>
                </div>

            </form>

        </div>
    </div>


    <script>
        let input = document.querySelector('input');
        let span = document.querySelector('span');

        input.addEventListener('change', () => {
        let files = input.files;

        if (files.length > 0)
        {
            // Max file size = 5MB
            if (files[0].size > 5 * 1024 * 1024)
            {
                span.innerText = 'File Size Exceeds 10kb';
                return;
            }
        }
        span.innerText = '';
        });

    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
