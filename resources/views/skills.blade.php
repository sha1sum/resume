<h1>Skills &amp; Proficiencies</h1>
<section>
    <p>
        I am familiar with a large number of technologies, with familiarity levels
        ranging the gamut from beginner to advanced. Listed here you'll find my skills
        and the level of proficiency with which I've reached regarding them. My ability
        to learn new things is off the charts, however, so had to be left off of the
        list!
    </p>
    <div class="skills">
        <div class="column">
            @foreach ($skills as $skill)
                <div class="skill">
                    <span>
                        {{ $skill->name }}
                    </span>
                    <div class="skill-stars">
                        @for ($x = 0; $x < $skill->stars; $x++)
                            <div class="skill-star">&#x272D</div>
                        @endfor
                    </div>
                </div>
            @endforeach
    </div>
</section>
