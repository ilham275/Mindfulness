@extends('layouts.app')

@section('style')
<link rel="stylesheet" href="isiform.css">
<link rel="stylesheet" href="listmusic.css">
<style>

</style>
@endsection

@section('content')

    <div class="container">
        <!-- Navbar -->
    </div>         
                <section class="container">
                    <div class="container-form">
                    <header>Form Ukur Kesehatan Mental</header>
                    <form action="#" class="form">
                      <div class="gender-box">
                        <h3>Kurang berminat atau bergairah dalam melakukan apapun</h3>
                        <div class="gender-option">
                          <p>Tidak pernah</p>
                          <div class="gender">
                            <input type="radio" id="check-male" name="gender" checked />
                            <label for="check-male">0</label>
                          </div>
                          <div class="gender">
                            <input type="radio" id="check-female" name="gender" />
                            <label for="check-female">1</label>
                          </div>
                          <div class="gender">
                            <input type="radio" id="check-other" name="gender" />
                            <label for="check-other">2</label>
                          </div>
                          <div class="gender">
                              <input type="radio" id="check-other" name="gender" />
                              <label for="check-other">3</label>
                            </div>
                          <p>Hampir setiap hari</p>
                        </div>
                      </div>
              
                      <div class="gender-box">
                          <h3>Merasa murung , sedih atau putus asa</h3>
                          <div class="gender-option">
                            <p>Tidak pernah</p>
                            <div class="gender">
                              <input type="radio" id="check-male" name="gender" checked />
                              <label for="check-male">0</label>
                            </div>
                            <div class="gender">
                              <input type="radio" id="check-female" name="gender" />
                              <label for="check-female">1</label>
                            </div>
                            <div class="gender">
                              <input type="radio" id="check-other" name="gender" />
                              <label for="check-other">2</label>
                            </div>
                            <div class="gender">
                                <input type="radio" id="check-other" name="gender" />
                                <label for="check-other">3</label>
                              </div>
                            <p>Hampir setiap hari</p>
                          </div>
                        </div>
              
                        <div class="gender-box">
                          <h3>Sulit tidur atau mudah terbangun</h3>
                          <div class="gender-option">
                            <p>Tidak pernah</p>
                            <div class="gender">
                              <input type="radio" id="check-male" name="gender" checked />
                              <label for="check-male">0</label>
                            </div>
                            <div class="gender">
                              <input type="radio" id="check-female" name="gender" />
                              <label for="check-female">1</label>
                            </div>
                            <div class="gender">
                              <input type="radio" id="check-other" name="gender" />
                              <label for="check-other">2</label>
                            </div>
                            <div class="gender">
                                <input type="radio" id="check-other" name="gender" />
                                <label for="check-other">3</label>
                              </div>
                            <p>Hampir setiap hari</p>
                          </div>
                        </div>
              
                        <div class="gender-box">
                          <h3>Terlalu banyak tidur</h3>
                          <div class="gender-option">
                            <p>Tidak pernah</p>
                            <div class="gender">
                              <input type="radio" id="check-male" name="gender" checked />
                              <label for="check-male">0</label>
                            </div>
                            <div class="gender">
                              <input type="radio" id="check-female" name="gender" />
                              <label for="check-female">1</label>
                            </div>
                            <div class="gender">
                              <input type="radio" id="check-other" name="gender" />
                              <label for="check-other">2</label>
                            </div>
                            <div class="gender">
                                <input type="radio" id="check-other" name="gender" />
                                <label for="check-other">3</label>
                              </div>
                            <p>Hampir setiap hari</p>
                          </div>
                        </div>
              
                      <button>Submit</button>
                    </form>
                </div>
                  </section>
    
        </main>

@endsection
