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
        h2{
            font-weight:100;
            padding:20px 0;
            border-top:2px solid grey;
            border-bottom:2px solid grey;
        }
        .container{
            margin:0 auto;
            width:100%;
        }
    </style>
</head>
<body>
    <div class="container">

        <section class="heading">
            <h2>{{$user->details->name}}</h2>
            <p>Email: {{$user->details->email}}</p>
            <p>Phone: {{$user->details->phone}}</p>
            <p>Address: {{$user->details->address}}</p>
        </section>

        <section class="summary">
            <h2>Summary</h2>
            <p>{{$user->details->summary}}</p>
        </section>

        <section class="education">
            <h2>Education</h2>
            @foreach($user->education as $e)

            <h4>{{$e->degree}} {{$e->field_of_study}}</h4>
            <p>Institution Name: {{$e->institution_name}}</p>
            <p>Graduation Start Date: {{$e->graduation_start_date}}</p>
            <p>Graduation End Date: {{$e->graduation_end_date}}</p>

            @endforeach
        </section>

        <section class="work">
        <h2>Work History</h2>
            @foreach($user->experiences as $work)

            <h4>Job Title:  {{$work->job_title}}</h4>
            <p>Employer: {{$work->employer}}</p>
            <p>Start Date: {{$work->start_date}}</p>
            <p>End Date: {{$work->end_date}}</p>

            @endforeach
        </section>

        <section class="skills">
        <h2>Skills</h2>
            @foreach($user->skills as $skill)
            
            <p>{{$skill->name}} ({{$skill->rating}} out of 5)</p>
        
            @endforeach

        </section>

        <section class="projects">
        <h2>Projects</h2>
            @foreach($user->projects as $project)
            
            <h4>Project Title: {{$project->project_title}}</h4>
            <p>{{$project->project_description}}</p>
        
            @endforeach

        </section>

        <section class="certifications">
        <h2>Certifications</h2>
        @foreach($user->certifications as $certificate)
            
            <h4>{{$certificate->title}}</h4>
            <p>{{$certificate->issuer}}</p>
            <p>Issued on: {{$certificate->date}}</p>

            @endforeach
        </section>
    </div>
</body>
</html>