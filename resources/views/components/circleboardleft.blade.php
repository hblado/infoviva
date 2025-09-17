<section class="circleboard">
<div class="circle-image">
        <img src="/images/profile/{{ $imagePath }}" alt={{ $title }}/>
    </div>
    <div class="circleboard-textboard">
        <section class="circleboard-section">
            <div class="title">
                <h1>{{ $title }}</h1>
            </div>
            <div class="text">
                <p>{{ $text }}</p>
            </div>
            <div class="tags">
                <a class="link-tag" target="_blank" href="{{ $orcid }}">
                    OrcID
                </a>
                <a class="link-tag" target="_blank" href="{{ $lattes }}">
                    Lattes
                </a>
            </div>
        </section>
    </div>
    
</section>