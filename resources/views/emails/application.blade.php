@if ($jobApplication->accepted === 1)
    <p>{{ $jobApplication->job->user->first_name.' '.$jobApplication->job->last_name }} has accepted you as{{ $jobApplication->job->title }}</p>
    <p>Here is a message from them</p>
    <p>{{ $jobApplication->message }}</p>
@elseif ($jobApplication->rejected === 1)
    <p>{{ $jobApplication->job->user->first_name.' '.$jobApplication->job->last_name }} has rejected your appication as{{ $jobApplication->job->title }}</p>
    <p>Here is a message from them</p>
    <p>{{ $jobApplication->message }}</p>
@else
    <p>{{ $user->first_name.' '.$user->last_name }} has applied for job as {{ $jobApplication->job->title }}</p>
    <p>This is the reason why you should hire this person</p>
    <p>{{ $jobApplication->description }}</p>
    @if($jobApplication->filename)
        <p>Please download the resume attached below.</p>
    @endif
@endif
<p>Thanks</p>
