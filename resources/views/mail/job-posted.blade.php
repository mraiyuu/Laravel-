<h2>
    {{ $job->title }}
</h2>

<p>
     Congratulations! Your job is available on our website.
</p>

<p>
    <a href="{{ url('/jobs/' .$job->id) }}">View your Job Listing</a>
</p>