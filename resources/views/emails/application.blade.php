<p>{{ $user->first_name.' '.$user->last_name }} has applied for job as {{ $jobApplication->job->title }}</p>
<p>This is the reason why you should hire this person</p>
<p>{{ $jobApplication->description }}</p>
@if($jobApplication->filename)
    <p>Please download the resume attached below.</p>
@endif
<p>Thanks</p>
