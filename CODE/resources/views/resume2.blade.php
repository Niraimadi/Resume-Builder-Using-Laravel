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
            font-size:17px;
            padding-bottom:-10%;
        }
        .layout{
            margin:0 auto;
            width:100%;
        }
        p{
            font-size:105%;
            line-height:1em;
        }
        ul{
            list-style-type:square;
        }
        h5{
            background-color:rgba(128,128,128,0.6);
            padding:0.5%;
        }
        h4{
            font-weight:bolder;
        }
    </style>
</head>
<body>
    <div class="layout">
        <section class="heading px-3 py-4 bg-dark text-white">
            <div class="">
                <div>
                    <h4>{{$user->details->name}}</h4>
                    <p class="lead">{{$user->details->summary}}</p>
                </div>
           
                <div>
                    <span>
                        <b><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                        </svg></b>&emsp;{{$user->details->phone}}
                    </span>&emsp;&emsp;
                    <span>
                        <b><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                        <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/>
                        </svg></b>&emsp;{{$user->details->email}}
                    </span><br>
                    <span>
                        <b><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                        <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                        </svg></b>&emsp;{{$user->details->address}}
                    </span>  
                </div>
            </div>
        </section>

        <section class="education px-3 py-2">
            <h5>EDUCATION</h5>
            @foreach($user->education as $e)
            <ul>
                <li><p class="px-3"><b>{{$e->degree}} - {{$e->field_of_study}}, {{$e->institution_name}}</b></p>
                <p class="px-3 year">{{$e->graduation_start_date}} to {{$e->graduation_end_date}}</p></li>
                </tr>
            </ul>
            @endforeach
        </section>

        <section class="work px-3">
            <h5>EXPERIENCE</h5>
            @foreach($user->experiences as $work)
            <ul>
                <li><p class="px-3"><b>{{$work->job_title}}, {{$work->employer}}</b></p>
                <p class="px-3">{{$work->start_date}} to {{$work->end_date}}</p></li>
            </ul>
            @endforeach
        </section>

        <section class="skills px-3">
            <h5>SKILLS</h5>
            @foreach($user->skills as $skill)
            <ul>
                <li class="px-3"><b>{{$skill->name}}</b></li>
            </ul>
            @endforeach
        </section>

        <section class="projects px-3">
            <h5>PROJECTS</h5>
            @foreach($user->projects as $project)
            <ul>
                <li><p class="px-3"><b>{{$project->project_title}}</b></p>
                <p class="px-3">{{$project->project_description}}</p></li>
            </ul>
            @endforeach
        </section>

        <section class="certifications px-3">
        <h5>CERTIFICATIONS</h5>
        @foreach($user->certifications as $certificate)
        <ul>
            <li><p class="px-3"><b>{{$certificate->title}}</b></p>
            <p class="px-3">Issuer:&emsp;{{$certificate->issuer}}<br>Issued on:&emsp; {{$certificate->date}}</p></li>
        </ul>
        @endforeach
        </section>

    </div>   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>