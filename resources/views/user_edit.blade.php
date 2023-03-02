<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add - User</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
        integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
        integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous">
    </script>
    <style>
        .gradient-custom-3 {
            /* fallback for old browsers */
            background: #84fab0;

            /* Chrome 10-25, Safari 5.1-6 */
            background: -webkit-linear-gradient(to right, rgba(132, 250, 176, 0.5), rgba(143, 211, 244, 0.5));

            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            background: linear-gradient(to right, rgba(132, 250, 176, 0.5), rgba(143, 211, 244, 0.5))
        }

        .gradient-custom-4 {
            /* fallback for old browsers */
            background: #84fab0;

            /* Chrome 10-25, Safari 5.1-6 */
            background: -webkit-linear-gradient(to right, rgba(132, 250, 176, 1), rgba(143, 211, 244, 1));

            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            background: linear-gradient(to right, rgba(132, 250, 176, 1), rgba(143, 211, 244, 1))
        }

        a {
            text-decoration: none;
        }
    </style>
</head>

<body>

    <section class="vh-100 bg-image"
        style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
        <div class="mask d-flex align-items-center h-100 gradient-custom-3">
            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                        <div class="card" style="border-radius: 15px;">
                            <div class="card-body p-5">
                                <h2 class="text-uppercase text-center mb-5">Create an account</h2>

                                <form method="POST" action="{{ route('user_update', $data->id) }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form3Example1cg"> Name</label>
                                        <input type="text" id="form3Example1cg" class="form-control form-control-lg"
                                            name="name" value="{{ $data->name }}" />

                                        <span class="text-danger">
                                            @error('name')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form3Example3cg">Email</label>
                                        <input type="email" id="form3Example3cg" class="form-control form-control-lg"
                                            name="email" value="{{ $data->email }}" />

                                        <span class="text-danger">
                                            @error('email')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form3Example4cg">Password</label>
                                        <input type="password" id="form3Example4cg" class="form-control form-control-lg"
                                            name="password" value="{{ $data->password }}" />

                                        <span class="text-danger">
                                            @error('password')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form3Example4cdg">Confirm password</label>
                                        <input type="password" id="form3Example4cdg"
                                            class="form-control form-control-lg" name="confirm-password" />

                                        <span class="text-danger">
                                            @error('confirm-password')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form3Example4cdg">Profile</label>
                                        <input type="file" id="form3Example4cdg" class="form-control form-control-lg"
                                            name="profile_pic" />
                                        <img src="{{ asset('uploads/users/' . $data->profile_pic) }}" height="70px"
                                            width="70px">

                                        <span class="text-danger">
                                            @error('profile_pic')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form3Example4cdg">Role</label>
                                        <input type="text" id="form3Example4cdg" class="form-control form-control-lg"
                                            name="role" value="{{ $data->role }}" />

                                        <span class="text-danger">
                                            @error('role')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>



                                    <div class="d-flex justify-content-center">
                                        <button type="submit"
                                            class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Update</button>
                                    </div>
                                    <div class="d-flex py-3 justify-content-center">
                                        <a href="/admin/showall_team">
                                            <button type="button"
                                                class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Back</button>
                                        </a>
                                    </div>

                                    <p class="text-center text-muted mt-5 mb-0">Have already an account? <a
                                            href="/user_login" class="fw-bold text-body"><u>Login here</u></a></p>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>
