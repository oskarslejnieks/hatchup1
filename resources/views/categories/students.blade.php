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
        <div class="card-container" style="margin-bottom: 100px;">
            <div class="card">
                <a href="{{ route('seniors') }}">
                    <div class="card-header"
                        style="background-image: url(https://www.picudarbnica.lv/wp-content/themes/jsh/img/fp-logo.png)">
                    </div>
                </a>
                <div class="card-body">
                    <h2 class="name">Kurjers</h2>
                    <h4 class="job-title">Picu darbnīca</h4>
                    <div class="bio" style="margin-top: -10px;">Atrašanās vieta: Rīgas iela 1, Jelgava</div>
                    <div class="bio">Spiediet uz attēla, lai uzzinātu vairāk</div>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <div class="stat">
                            <span class="label" style="">Samaksa</span>
                            <span class="value">4 EUR Par piegādi</span>
                        </div>
                        <div class="stat">
                            <span class="label">Darba laiks</span>
                            <span class="value">12:00-24:00</span>
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
                        style="background-image: url(https://media.licdn.com/dms/image/D4D0BAQEHgPZii_-__A/company-logo_200_200/0/1667227936690?e=2147483647&v=beta&t=g7-zE7LM9Pq9JbLLs98mUJ8KswATb6dkoPkFS2p9Ha8)">
                    </div>
                </a>
                <div class="card-body">
                    <h2 class="name">Apkopējs</h2>
                    <h4 class="job-title">Pillar</h4>
                    <div class="bio" style="margin-top: -10px;">Atrašanās vieta: Bauskas iela 58A, Zemgales
                        priekšpilsēta, Rīga, LV-1004</div>
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
                            <span class="value">8:00-21:00</span>
                        </div>
                        <div class="stat">
                            <span class="label">Statuss</span>
                            <span class="value" style="color: orange;">Gandrīz pilns</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <a href="#">
                    <div class="card-header"
                        style="background-image: url(https://logos-world.net/wp-content/uploads/2022/04/Circle-K-Emblem.png)">
                    </div>
                </a>
                <div class="card-body">
                    <h2 class="name">Pārdevējs</h2>
                    <h4 class="job-title">Circle K</h4>
                    <div class="bio" style="margin-top: -10px;">Atrašanās vieta: Brīvības bulvāris 1, Jelgava, LV-3002</div>
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
                            <span class="value">7:00-15:00</span>
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
                        style="background-image: url(https://www.llu.lv/sites/default/files/images/articles/LLU_logo_rgb_0.jpg)">
                    </div>
                </a>
                <div class="card-body">
                    <h2 class="name">Garderobes darbinieks uz balles dienu</h2>
                    <h4 class="job-title">LLU</h4>
                    <div class="bio" style="margin-top: -10px;">Atrašanās vieta: Lielā iela 2, Jelgava</div>
                    <div class="bio">Spiediet uz attēla, lai uzzinātu vairāk</div>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <div class="stat">
                            <span class="label" style="">Samaksa</span>
                            <span class="value">8 EUR/H</span>
                        </div>
                        <div class="stat">
                            <span class="label">Darba laiks</span>
                            <span class="value">20:00 - 03:00</span>
                        </div>
                        <div class="stat">
                            <span class="label">Statuss</span>
                            <span class="value" style="color: orange;">Gandrīz pilns</span>
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
