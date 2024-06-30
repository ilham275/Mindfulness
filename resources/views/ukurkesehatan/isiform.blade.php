@extends('layouts.app')

@section('style')
    <link rel="stylesheet" href="../isiform.css">
    <link rel="stylesheet" href="../listmusic.css">
    <style>
        .question-box {
            margin-bottom: 20px;
        }

        .options {
            display: flex;
            align-items: center;
        }

        .option {
            margin-right: 30px;
        }
    </style>
@endsection

@section('content')
    <div class="container">
        <!-- Navbar -->
    </div>
    <section class="container">
        <div class="container-form">
            <header>Form Ukur Kesehatan Mental</header>
            <form id="mentalHealthForm" action="{{ route('kesehatan.store') }}" method="POST" class="form">
                @csrf

                <div class="question-box">
                    <h3>Kurang berminat atau bergairah dalam melakukan apapun</h3>
                    <div class="options">
                        <label>Tidak pernah</label>
                        <div class="option">
                            <input type="radio" id="interest-0" name="interest" value="0" checked />
                            <label for="interest-0">0</label>
                        </div>
                        <div class="option">
                            <input type="radio" id="interest-1" name="interest" value="1" />
                            <label for="interest-1">1</label>
                        </div>
                        <div class="option">
                            <input type="radio" id="interest-2" name="interest" value="2" />
                            <label for="interest-2">2</label>
                        </div>
                        <div class="option">
                            <input type="radio" id="interest-3" name="interest" value="3" />
                            <label for="interest-3">3</label>
                        </div>
                        <label>Hampir setiap hari</label>
                    </div>
                </div>

                <div class="question-box">
                    <h3>Merasa murung, sedih atau putus asa</h3>
                    <div class="options">
                        <label>Tidak pernah</label>
                        <div class="option">
                            <input type="radio" id="mood-0" name="mood" value="0" checked />
                            <label for="mood-0">0</label>
                        </div>
                        <div class="option">
                            <input type="radio" id="mood-1" name="mood" value="1" />
                            <label for="mood-1">1</label>
                        </div>
                        <div class="option">
                            <input type="radio" id="mood-2" name="mood" value="2" />
                            <label for="mood-2">2</label>
                        </div>
                        <div class="option">
                            <input type="radio" id="mood-3" name="mood" value="3" />
                            <label for="mood-3">3</label>
                        </div>
                        <label>Hampir setiap hari</label>
                    </div>
                </div>

                <div class="question-box">
                    <h3>Sulit tidur atau mudah terbangun</h3>
                    <div class="options">
                        <label>Tidak pernah</label>
                        <div class="option">
                            <input type="radio" id="sleep-0" name="sleep" value="0" checked />
                            <label for="sleep-0">0</label>
                        </div>
                        <div class="option">
                            <input type="radio" id="sleep-1" name="sleep" value="1" />
                            <label for="sleep-1">1</label>
                        </div>
                        <div class="option">
                            <input type="radio" id="sleep-2" name="sleep" value="2" />
                            <label for="sleep-2">2</label>
                        </div>
                        <div class="option">
                            <input type="radio" id="sleep-3" name="sleep" value="3" />
                            <label for="sleep-3">3</label>
                        </div>
                        <label>Hampir setiap hari</label>
                    </div>
                </div>

                <div class="question-box">
                    <h3>Terlalu banyak tidur</h3>
                    <div class="options">
                        <label>Tidak pernah</label>
                        <div class="option">
                            <input type="radio" id="oversleep-0" name="oversleep" value="0" checked />
                            <label for="oversleep-0">0</label>
                        </div>
                        <div class="option">
                            <input type="radio" id="oversleep-1" name="oversleep" value="1" />
                            <label for="oversleep-1">1</label>
                        </div>
                        <div class="option">
                            <input type="radio" id="oversleep-2" name="oversleep" value="2" />
                            <label for="oversleep-2">2</label>
                        </div>
                        <div class="option">
                            <input type="radio" id="oversleep-3" name="oversleep" value="3" />
                            <label for="oversleep-3">3</label>
                        </div>
                        <label>Hampir setiap hari</label>
                    </div>
                </div>

                <div class="question-box">
                    <h3>Merasa lelah atau kurang bertenaga</h3>
                    <div class="options">
                        <label>Tidak pernah</label>
                        <div class="option">
                            <input type="radio" id="tired-0" name="tired" value="0" checked />
                            <label for="tired-0">0</label>
                        </div>
                        <div class="option">
                            <input type="radio" id="tired-1" name="tired" value="1" />
                            <label for="tired-1">1</label>
                        </div>
                        <div class="option">
                            <input type="radio" id="tired-2" name="tired" value="2" />
                            <label for="tired-2">2</label>
                        </div>
                        <div class="option">
                            <input type="radio" id="tired-3" name="tired" value="3" />
                            <label for="tired-3">3</label>
                        </div>
                        <label>Hampir setiap hari</label>
                    </div>
                </div>

                <div class="question-box">
                    <h3>Kurang nafsu makan</h3>
                    <div class="options">
                        <label>Tidak pernah</label>
                        <div class="option">
                            <input type="radio" id="appetite-0" name="appetite" value="0" checked />
                            <label for="appetite-0">0</label>
                        </div>
                        <div class="option">
                            <input type="radio" id="appetite-1" name="appetite" value="1" />
                            <label for="appetite-1">1</label>
                        </div>
                        <div class="option">
                            <input type="radio" id="appetite-2" name="appetite" value="2" />
                            <label for="appetite-2">2</label>
                        </div>
                        <div class="option">
                            <input type="radio" id="appetite-3" name="appetite" value="3" />
                            <label for="appetite-3">3</label>
                        </div>
                        <label>Hampir setiap hari</label>
                    </div>
                </div>

                <div class="question-box">
                    <h3>Terlalu banyak makan</h3>
                    <div class="options">
                        <label>Tidak pernah</label>
                        <div class="option">
                            <input type="radio" id="overeating-0" name="overeating" value="0" checked />
                            <label for="overeating-0">0</label>
                        </div>
                        <div class="option">
                            <input type="radio" id="overeating-1" name="overeating" value="1" />
                            <label for="overeating-1">1</label>
                        </div>
                        <div class="option">
                            <input type="radio" id="overeating-2" name="overeating" value="2" />
                            <label for="overeating-2">2</label>
                        </div>
                        <div class="option">
                            <input type="radio" id="overeating-3" name="overeating" value="3" />
                            <label for="overeating-3">3</label>
                        </div>
                        <label>Hampir setiap hari</label>
                    </div>
                </div>

                <div class="question-box">
                    <h3>Kurang percaya diri atau merasa bahwa Anda adalah orang yang gagal atau telah mengecewakan diri
                        sendiri atau keluarga</h3>
                    <div class="options">
                        <label>Tidak pernah</label>
                        <div class="option">
                            <input type="radio" id="self-esteem-0" name="self_esteem" value="0" checked />
                            <label for="self-esteem-0">0</label>
                        </div>
                        <div class="option">
                            <input type="radio" id="self-esteem-1" name="self_esteem" value="1" />
                            <label for="self-esteem-1">1</label>
                        </div>
                        <div class="option">
                            <input type="radio" id="self-esteem-2" name="self_esteem" value="2" />
                            <label for="self-esteem-2">2</label>
                        </div>
                        <div class="option">
                            <input type="radio" id="self-esteem-3" name="self_esteem" value="3" />
                            <label for="self-esteem-3">3</label>
                        </div>
                        <label>Hampir setiap hari</label>
                    </div>
                </div>

                <div class="question-box">
                    <h3>Sulit berkonsentrasi jika melakukan kegiatan</h3>
                    <div class="options">
                        <label>Tidak pernah</label>
                        <div class="option">
                            <input type="radio" id="concentration-0" name="concentration" value="0" checked />
                            <label for="concentration-0">0</label>
                        </div>
                        <div class="option">
                            <input type="radio" id="concentration-1" name="concentration" value="1" />
                            <label for="concentration-1">1</label>
                        </div>
                        <div class="option">
                            <input type="radio" id="concentration-2" name="concentration" value="2" />
                            <label for="concentration-2">2</label>
                        </div>
                        <div class="option">
                            <input type="radio" id="concentration-3" name="concentration" value="3" />
                            <label for="concentration-3">3</label>
                        </div>
                        <label>Hampir setiap hari</label>
                    </div>
                </div>

                <div class="question-box">
                    <h3>Merasa resah atau gelisah sehingga Anda lebih sering bergerak dari biasanya</h3>
                    <div class="options">
                        <label>Tidak pernah</label>
                        <div class="option">
                            <input type="radio" id="restlessness-0" name="restlessness" value="0" checked />
                            <label for="restlessness-0">0</label>
                        </div>
                        <div class="option">
                            <input type="radio" id="restlessness-1" name="restlessness" value="1" />
                            <label for="restlessness-1">1</label>
                        </div>
                        <div class="option">
                            <input type="radio" id="restlessness-2" name="restlessness" value="2" />
                            <label for="restlessness-2">2</label>
                        </div>
                        <div class="option">
                            <input type="radio" id="restlessness-3" name="restlessness" value="3" />
                            <label for="restlessness-3">3</label>
                        </div>
                        <label>Hampir setiap hari</label>
                    </div>
                </div>

                <div class="question-box">
                    <h3>Merasa lebih baik mati atau ingin melukai diri sendiri dengan cara apapun</h3>
                    <div class="options">
                        <label>Tidak pernah</label>
                        <div class="option">
                            <input type="radio" id="self-harm-0" name="self_harm" value="0" checked />
                            <label for="self-harm-0">0</label>
                        </div>
                        <div class="option">
                            <input type="radio" id="self-harm-1" name="self_harm" value="1" />
                            <label for="self-harm-1">1</label>
                        </div>
                        <div class="option">
                            <input type="radio" id="self-harm-2" name="self_harm" value="2" />
                            <label for="self-harm-2">2</label>
                        </div>
                        <div class="option">
                            <input type="radio" id="self-harm-3" name="self_harm" value="3" />
                            <label for="self-harm-3">3</label>
                        </div>
                        <label>Hampir setiap hari</label>
                    </div>
                </div>

                <input type="hidden" id="totalScore" name="totalScore" value="0">

                <button type="submit">Submit</button>
            </form>

            <script>
                document.getElementById('mentalHealthForm').addEventListener('submit', function(event) {
                    event.preventDefault(); // Prevent default form submission

                    // Calculate total score
                    let totalScore = 0;
                    const questions = ['interest', 'mood', 'sleep', 'oversleep', 'tired', 'appetite', 'overeating', 'self_esteem', 'concentration', 'restlessness', 'self_harm'];
                    questions.forEach(question => {
                        const radios = document.getElementsByName(question);
                        for (const radio of radios) {
                            if (radio.checked) {
                                totalScore += parseInt(radio.value);
                                break;
                            }
                        }
                    });

                    // Log totalScore to console for debugging
                    console.log('Total Score:', totalScore);

                    // Set total score to hidden input
                    document.getElementById('totalScore').value = totalScore;

                    // Submit the form
                    this.submit();
                });
            </script>

        </div>
    </section>

    </main>
@endsection
