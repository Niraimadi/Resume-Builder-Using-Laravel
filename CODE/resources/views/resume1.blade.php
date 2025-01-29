<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume</title>
    <style>
        body{
            border:solid 1px black;
            padding:2%;
            line-height:1em;
            font-size:17px;
        }
        .layout{
            margin:0 auto;
            width:100%;
        }
        .year{
            border-right: solid 3px black;
            margin-right:1%;
            width:20%;
        }
        .skill{
            width:150px;
        }
        h4,h5{
            color:#3F51B5;
        }
        h4{
            font-weight:bolder;
        }
    </style>
</head>
<body>
    <div class="layout">
        <section class="heading px-3">
                <h4>{{$user->details->name}}</h4>
                <p><b>Email:</b>{{$user->details->email}}</p>
                <p><b>Phone:</b>{{$user->details->phone}}</p>
                <p><b>Address:</b> {{$user->details->address}}</p>
        </section>
        <hr>
        <section class="summary px-3">
            <h5>OBJECTIVE</h5>
            <p>{{$user->details->summary}}</p>
        </section>

        <section class="education px-3">
            <h5>EDUCATION</h5>
            @foreach($user->education as $e)
            <table class="mb-1">
                <tr>
                    <td class="px-3 year">{{$e->graduation_start_date}} to {{$e->graduation_end_date}}<br><br></td>
                    <td class="px-3">&emsp;{{$e->degree}} - {{$e->field_of_study}}<br>&emsp;{{$e->institution_name}}<br></td>
                </tr>
            </table>
            @endforeach
        </section>

        <section class="work px-3">
            <h5>EXPERIENCE</h5>
            @foreach($user->experiences as $work)
            <table class="mb-1">
                <tr>
                    <td class="px-3 year">{{$work->start_date}} to {{$work->end_date}}<br><br></td>
                    <td class="px-3">&emsp;Role:&emsp; {{$work->job_title}}<br>&emsp;Employer:&emsp; {{$work->employer}}</td>
                </tr>
            </table>
            @endforeach
        </section>

        <section class="skills px-3">
            <h5>SKILLS</h5>
            @foreach($user->skills as $skill)
            <table class="skill-rating">
                <td class="px-3 skill">{{$skill->name}}</td>
                <td class="px-3">({{$skill->rating}} out of 5)</td>
            </table>
            @endforeach
        </section>

        <section class="projects px-3">
            <h5>PROJECTS</h5>
            @foreach($user->projects as $project)
            <p><b>{{$project->project_title}}</b></p>
            <p>{{$project->project_description}}</p>
            @endforeach
        </section>

        <section class="certifications px-3">
        <h5>CERTIFICATIONS</h5>
        @foreach($user->certifications as $certificate)
            <p><b>{{$certificate->title}}</b></p>
            <p>Issuer:&emsp;{{$certificate->issuer}}<br>Issued on:&emsp; {{$certificate->date}}</p>
        @endforeach
        </section>

    </div>   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>