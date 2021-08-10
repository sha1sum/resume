<h1>Professional Experience</h1>

<p>
    Some of those listed as contacts under each entry below are my references.
    As you can probably understand, references' contact information will not be posted online.
    You may contact me and request reference information if desired.
</p>

@foreach ($employers as $employer)
    <section>
        <header>
            <h2>{{ $employer->name }}</h2>
            <div><span>Software Engineering Team Lead</span> &mdash; 2019-2021</div>
            <div><span>Lead Developer in Test</span> &mdash; 2017-2019</div>
            <div><span>Server Software Engineer</span> &mdash; 2016-2017</div>
        </header>
        {!! $employer->description !!}
        <footer>
            @if ($employer->website_url)
                <span>
                    <a rel="noopener" href="{{ $employer->website_url }}" target="_blank">
                        {{ $employer->website_label }}
                    </a>
                    @if ($employer->reference_name)
                        &bull;
                    @endif
                </span>
            @endif
            @if ($employer->reference_name && $employer->reference_position)
                Reference: <strong>{{ $employer->reference_name }}</strong> &mdash; {{ $employer->reference_position }}
            @endif
        </footer>
    </section>
@endforeach
