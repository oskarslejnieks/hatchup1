@extends('template')

@section('content')
    <div class="category-page">
        <nav class="amazing-tabs">
            <div class="filteredList">
                <h1>Filtri</h1>
                <div class="flex">
                    <button class="filter-button" id="button1">Rīga</button>
                    <button class="filter-button" id="button2">Daugavpils</button>
                    <button class="filter-button" id="button3">Jelgava</button>
                    <button class="filter-button" id="button3">Liepāja</button>

                </div>
            </div>
        </nav>
        <h1 style="text-align: center">Darba piedāvājumi</h1>
        <div class="card-container" style="margin-bottom: 100px;">
            <div class="card">
                <a href="{{ route('socialMedia') }}">
                    <div class="card-header"
                        style="background-image: url(https://www.adaptivemedia.lv/wp-content/uploads/2019/10/adaptivedia-logo.png)">
                    </div>
                </a>
                <div class="card-body">
                    <h2 class="name">SOCIĀLO MEDIJU SPECIĀLISTS</h2>
                    <h4 class="job-title">Adaptive Media SIA</h4>
                    <div class="bio" style="margin-top: -10px;">Atrašanās vieta: Ernesta Birznieka-Upīša iela 20A-603,
                        Latgales priekšpilsēta, Rīga, LV-1050</div>
                    <div class="bio">Spiediet uz attēla, lai uzzinātu vairāk</div>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <div class="stat">
                            <span class="label" style="">Samaksa</span>
                            <span class="value">7 EUR/H</span>
                        </div>
                        <div class="stat">
                            <span class="label">Darba laiks</span>
                            <span class="value">9:00-17:00</span>
                        </div>
                        <div class="stat">
                            <span class="label">Statuss</span>
                            <span class="value" style="color: green;">Brīvs</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <a href="#">
                    <div class="card-header"
                        style="background-image: url(https://static.wixstatic.com/media/d08b3d_725ba1e0a3e44f8897e07bd4b22a1212~mv2.jpg/v1/fill/w_1200,h_630,al_c/d08b3d_725ba1e0a3e44f8897e07bd4b22a1212~mv2.jpg)">
                    </div>
                </a>
                <div class="card-body">
                    <h2 class="name">Mārketinga speciālists</h2>
                    <h4 class="job-title">Top Media</h4>
                    <div class="bio" style="margin-top: -10px;">Atrašanās vieta: Bauskas iela 58A, Zemgales
                        priekšpilsēta, Rīga, LV-1004</div>
                    <div class="bio">Spiediet uz attēla, lai uzzinātu vairāk</div>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <div class="stat">
                            <span class="label" style="">Samaksa</span>
                            <span class="value">7.5 EUR/H</span>
                        </div>
                        <div class="stat">
                            <span class="label">Darba laiks</span>
                            <span class="value">10:00-18:00</span>
                        </div>
                        <div class="stat">
                            <span class="label">Statuss</span>
                            <span class="value" style="color: green;">Brīvs</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header"
                    style="background-image: url(https://media.licdn.com/dms/image/C4E22AQFaGyy2TtO1gA/feedshare-shrink_800/0/1643781806486?e=2147483647&v=beta&t=N0lBnhSj7Fcm8PnvuZja5YyUfAOHw5szSWJL7Q-EyNw)">
                </div>
                <div class="card-body">
                    <h2 class="name">Datu analītiķis</h2>
                    <h4 class="job-title">Wandoo Finance</h4>
                    <div class="bio" style="margin-top: -10px;">Atrašanās vieta: K.Ulmaņa gatve 119, Mārupe</div>
                    <div class="bio">Spiediet uz attēla, lai uzzinātu vairāk</div>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <div class="stat">
                            <span class="label" style="">Samaksa</span>
                            <span class="value">6 EUR/H</span>
                        </div>
                        <div class="stat">
                            <span class="label">Darba laiks</span>
                            <span class="value">9:00-17:00</span>
                        </div>
                        <div class="stat">
                            <span class="label">Statuss</span>
                            <span class="value" style="color: green;">Brīvs</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <a href="#">
                    <div class="card-header"
                        style="background-image: url(data:image/png;base64,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)">
                    </div>
                </a>
                <div class="card-body">
                    <h2 class="name">Video montētājs</h2>
                    <h4 class="job-title">Rīgas 1. Tālmācības vidusskola</h4>
                    <div class="bio" style="margin-top: -10px;">Atrašanās vieta: Andreja Saharova iela 35 - 109, Latgales
                        priekšpilsēta, Rīga, LV-1082</div>
                    <div class="bio">Spiediet uz attēla, lai uzzinātu vairāk</div>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <div class="stat">
                            <span class="label" style="">Samaksa</span>
                            <span class="value">5 EUR/H</span>
                        </div>
                        <div class="stat">
                            <span class="label">Darba laiks</span>
                            <span class="value">9:00-17:00</span>
                        </div>
                        <div class="stat">
                            <span class="label">Statuss</span>
                            <span class="value" style="color: orange;">Gandrīz pilns</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-container">

            <div class="card">
                <a href="#">
                    <div class="card-header"
                        style="background-image: url(data:image/png;base64,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)">
                    </div>
                </a>
                <div class="card-body">
                    <h2 class="name">{{ $post->name }}</h2>
                    <h4 class="job-title">{{ $post->name }}</h4>
                    <div class="bio" style="margin-top: -10px;">{{ $post->address }}</div>
                    <div class="bio">Spiediet uz attēla, lai uzzinātu vairāk</div>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <div class="stat">
                            <span class="label" style="">Samaksa</span>
                            <span class="value">{{ $post->pay }}</span>
                        </div>
                        <div class="stat">
                            <span class="label">Darba laiks</span>
                            <span class="value">{{ $post->{'work-time'} }}</span>
                        </div>
                        <div class="stat">
                            <span class="label">Statuss</span>
                            <span class="value" style="color: orange;">{{ $post->status }}</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    </div>
    <script>
        const buttons = document.querySelectorAll('.filter-button');
        let activeButton;

        buttons.forEach(button => {
            button.addEventListener('click', () => {
                if (activeButton) {
                    activeButton.classList.remove('active');
                }
                button.classList.add('active');
                activeButton = button;
            });
        });
    </script>
@endsection
