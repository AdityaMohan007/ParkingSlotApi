# Parking Slot Booking API

## Instructions
1. Provide Database connection string in .env.sample file in project root. The DB to work with is uploaded in database directory.
(rename .env.sample to .env)

2. Run the project 
```
php artisan serve
```

3. When you input url from web.php, we will see the Parking Slot booking form.

![Screenshot (40)](https://user-images.githubusercontent.com/44108584/205217364-0caa13fd-477a-43c3-afbc-dbf24c7e02ac.png)

4. When the form is submitted, it will be redirected to a table showing the booking details of the individual user.

![Screenshot (41)](https://user-images.githubusercontent.com/44108584/205217401-57e451a9-394b-4491-9e58-88f3462dfe5e.png)

5. If we set the api to GET request in postman, it will return all the users who did the booking.

![Screenshot (44)](https://user-images.githubusercontent.com/44108584/205217858-d92b152d-0591-47d5-997e-53fcba561d11.png)
 
 6. If we set the api to POST request and input necessary fields manually in json format, it will return the booking details (Appointment number, Slot number, Parking fee, etc) who did the booking.
 
![Screenshot (46)](https://user-images.githubusercontent.com/44108584/205219030-a6bc845c-fe73-436e-9142-1fe3d3bba7a6.png)
