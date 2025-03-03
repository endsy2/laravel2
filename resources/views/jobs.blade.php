<div>
    @foreach($jobs as $job)
    <div>
        <p>{{$job['title']}}</p>
        <p>{{$job['salary']}}</p>
        <p>{{$job->employer->name}}</p>

    </div>
    @endforeach
    <div>
        {{ $jobs->link() }}
    </div>
</div>