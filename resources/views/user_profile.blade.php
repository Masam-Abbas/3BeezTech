<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
        integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
        integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous">
    </script>

    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:weight@100;200;300;400;500;600;700;800&display=swap");


        * {
            text-transform: capitalize;
        }

        body {
            background-color: #545454;
            font-family: "Poppins", sans-serif;
            font-weight: 300;
        }

        .container {
            height: 100vh;
        }

        .card {

            width: 380px;
            border: none;
            border-radius: 15px;
            padding: 8px;
            background-color: #fff;
            position: relative;
            height: 370px;
        }

        .upper {

            height: 100px;

        }

        .upper img {

            width: 100%;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;

        }

        .user {
            position: relative;
        }

        .profile img {


            height: 80px;
            width: 80px;
            margin-top: 2px;


        }

        .profile {

            position: absolute;
            top: -50px;
            left: 38%;
            height: 90px;
            width: 90px;
            border: 3px solid #fff;

            border-radius: 50%;

        }

        .follow {

            border-radius: 15px;
            padding-left: 20px;
            padding-right: 20px;
            height: 35px;
        }

        .stats span {

            font-size: 29px;
        }
    </style>
</head>

<body>
    {{-- <h1>Hello-This is user profile card</h1> --}}

    <div class="container">

        <div class="container d-flex justify-content-center align-items-center">

            <div class="card">

                <div class="upper">

                    {{-- <img src="https://source.unsplash.com/random/520x600/?men"> class="img-fluid"> --}}

                </div>

                <div class="user text-center">

                    <div class="profile">

                        <img src="https://source.unsplash.com/random/520x600/?men" class="rounded-circle"
                            width="80">

                    </div>

                </div>


                <div class="mt-5 text-center">

                    <h4 class="mb-0">{{ $data->name }}</h4>
                    <span class="text-muted d-block mb-2">{{ $data->email }}</span>

                    <button class="btn btn-primary btn-sm follow">Follow</button>


                    <div class="d-flex justify-content-between align-items-center mt-4 px-4">

                        <div class="stats">
                            <h6 class="mb-0">Followers</h6>
                            <span>8,797</span>

                        </div>


                        <div class="stats">
                            <h6 class="mb-0">Projects</h6>
                            <span>142</span>

                        </div>


                        <div class="stats">
                            <h6 class="mb-0">Ranks</h6>
                            <span>129</span>

                        </div>

                    </div>

                    <a href="/dashboard-admin">
                        <button class="btn btn-secondary mt-3 btn-sm follow">Back</button>
                    </a>
                </div>

            </div>

        </div>

    </div>
</body>

</html>
