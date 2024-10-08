<h2>
    {{ $job->title }}
</h2>

<pre>
    Congrats!!!

    You've successfully created a job at our website :)
</pre>

<p>
    <a href="{{ url('/jobs/' . $job->id) }}">View Your Job Listing</a>
</p>
