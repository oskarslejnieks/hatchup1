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
                        style="background-image: url(https://seeklogo.com/images/L/Lido-logo-6C8BB3F47A-seeklogo.com.png)">
                    </div>
                </a>
                <div class="card-body">
                    <h2 class="name">Pavārs</h2>
                    <h4 class="job-title">LIDO</h4>
                    <div class="bio" style="margin-top: -10px;">Atrašanās vieta: Ķengaraga iela 6a, Rīga</div>
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
                            <span class="value">9:00-21:00</span>
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
                        style="background-image: url(https://seeklogo.com/images/L/Lido-logo-6C8BB3F47A-seeklogo.com.png)">
                    </div>
                </a>
                <div class="card-body">
                    <h2 class="name">Kasieris</h2>
                    <h4 class="job-title">LIDO</h4>
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
                        style="background-image: url(https://upload.wikimedia.org/wikipedia/commons/thumb/c/c5/Ikea_logo.svg/2560px-Ikea_logo.svg.png)">
                    </div>
                </a>
                <div class="card-body">
                    <h2 class="name">Trauku mazgātāji</h2>
                    <h4 class="job-title">IKEA</h4>
                    <div class="bio" style="margin-top: -10px;">Atrašanās vieta: Biķeru iela 2, Dreliņi, Stopiņu novads, Rīga</div>
                    <div class="bio">Spiediet uz attēla, lai uzzinātu vairāk</div>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <div class="stat">
                            <span class="label" style="">Samaksa</span>
                            <span class="value">6.2 EUR/H</span>
                        </div>
                        <div class="stat">
                            <span class="label">Darba laiks</span>
                            <span class="value">10:00-20:00</span>
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
                        style="background-image: url(https://1000logos.net/wp-content/uploads/2022/09/Wolt-Logo.png)">
                    </div>
                </a>
                <div class="card-body">
                    <h2 class="name">Preču komplektētājs</h2>
                    <h4 class="job-title">Wolt Services Latvija</h4>
                    <div class="bio" style="margin-top: -10px;">Atrašanās vieta: kapseļu iela 15, Rīga</div>
                    <div class="bio">Spiediet uz attēla, lai uzzinātu vairāk</div>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <div class="stat">
                            <span class="label" style="">Samaksa</span>
                            <span class="value">5.5 EUR/H</span>
                        </div>
                        <div class="stat">
                            <span class="label">Darba laiks</span>
                            <span class="value">8:30 - 15:00</span>
                        </div>
                        <div class="stat">
                            <span class="label">Statuss</span>
                            <span class="value" style="color: green;">Brīvs</span>
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
