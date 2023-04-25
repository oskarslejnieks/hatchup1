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
                        style="background-image: url()">
                    </div>
                </a>
                <div class="card-body">
                    <h2 class="name">Fotogrāfs</h2>
                    <h4 class="job-title">SIA Ideju Foto</h4>
                    <div class="bio" style="margin-top: -10px;">Atrašanās vieta: Lienes iela 28, Latgales priekšpilsēta, Rīga, LV-1009</div>
                    <div class="bio">Spiediet uz attēla, lai uzzinātu vairāk</div>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <div class="stat">
                            <span class="label" style="">Samaksa</span>
                            <span class="value">15 EUR/H</span>
                        </div>
                        <div class="stat">
                            <span class="label">Darba laiks</span>
                            <span class="value">15:00-18:00</span>
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
                        style="background-image: url(https://www.adazi.lv/wp-content/uploads/2018/07/Elvi_logo_bez_saukla-2018.g.jpg)">
                    </div>
                </a>
                <div class="card-body">
                    <h2 class="name">Apsargs</h2>
                    <h4 class="job-title">ELVI</h4>
                    <div class="bio" style="margin-top: -10px;">Atrašanās vieta: Jelgava, Lielā iela 49, LV-3001</div>
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
                            <span class="value">8:00-22:00</span>
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
                    style="background-image: url()">
                </div>
                <div class="card-body">
                    <h2 class="name">Tulks</h2>
                    <h4 class="job-title">Watel</h4>
                    <div class="bio" style="margin-top: -10px;">Atrašanās vieta: Rīga, Bolderāja, Slimnīcas iela 6C</div>
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
                    <h2 class="name">Pirmsskolas skolotājs</h2>
                    <h4 class="job-title">Rīgas 154. Pirmsskolas izglītības iestāde</h4>
                    <div class="bio" style="margin-top: -10px;">Atrašanās vieta: Rīga, Purvciems, Andromedas gatve 3</div>
                    <div class="bio">Spiediet uz attēla, lai uzzinātu vairāk</div>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <div class="stat">
                            <span class="label" style="">Samaksa</span>
                            <span class="value">4.5 EUR/H</span>
                        </div>
                        <div class="stat">
                            <span class="label">Darba laiks</span>
                            <span class="value">8:00-15:00</span>
                        </div>
                        <div class="stat">
                            <span class="label">Statuss</span>
                            <span class="value" style="color: orange;">Brīvs</span>
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
