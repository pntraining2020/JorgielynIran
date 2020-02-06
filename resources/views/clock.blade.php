<!DOCTYPE html>
<html>

<head>
    <title>Exam</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.0.min.js"
        integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s=" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="{{url('css/style.css')}}">
</head>

<body>
    <div class="section-1-container section-container">
        <div class="container">
            <div class="row">
                <div
                    class="col-10 offset-1 col-lg-8 offset-lg-2 div-wrapper d-flex justify-content-center align-items-center">

                    <div class="div-to-align">
                        <div class="card">
                            <div class="card-body">
                                <center>
                                    <h1 class="card-title">Time-Tracking App</h1>
                                </center>
                                <select title="Pick a number" class="selectpicker" type="button">
                                    <option>Select...</option>
                                    <option>Jorge</option>
                                    <option>{{$employee}}</option>
                                    <option>Three</option>
                                </select>
                                <div id="div1">
                                    <p id="time"></p>
                                    <p id="date"></p>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-sm-6">

                                        <button type="button" class="btn btn-outline-primary" onload="setTime()"
                                            onclick="setTime();" class="button">Clock In</button>
                                    </div>
                                    <div class="col-sm-6">
                                        <input id="field" type="text" name="field" value="" size="17" />

                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-sm-6">

                                        <button type="button" class="btn btn-outline-success">Start</button>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-sm-6">

                                        <button type="button" class="btn btn-outline-danger">End</button>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>

                                <br>
                                <div class="row">
                                    <div class="col-sm-6">

                                        <button type="button" class="btn btn-outline-primary">Clock Out</button>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-sm-6">

                                        <label for="pwd">TOTAL TIME WORKED:</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-sm-6">

                                        <label for="pwd">HOURS LEFT BEFORE TIMEOUT:</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">

                                        <label for="pwd">TOTAL BREAKS USED:</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <script>
    window.setInterval(ut, 1000);

    function ut() {
        var d = new Date();
        document.getElementById("time").innerHTML = d.toLocaleTimeString();
        document.getElementById("date").innerHTML = d.toLocaleDateString();
    }

    function getTimeStamp() {
        var now = new Date();
        return ((now.getMonth() + 1) + '/' + (now.getDate()) + '/' + now.getFullYear() + " " + now.getHours() + ':' +
            ((now.getMinutes() < 10) ? ("0" + now.getMinutes()) : (now.getMinutes())) + ':' + ((now.getSeconds() <
                10) ? ("0" + now.getSeconds()) : (now.getSeconds())));
    }

    function setTime() {
        document.getElementById('field').value = getTimeStamp();
    }
    </script>

</body>

</html>