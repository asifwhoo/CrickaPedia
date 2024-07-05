<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Player Registration</title>
    <link href="{{ asset('bootstrap-5.0.2-dist/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/form.css') }}" rel="stylesheet">
</head>
<body>
<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 text-center">Add New Player</h3>
            <form method="POST" action="{{ route('player.store') }}">
              @csrf
              <div class="row">
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <input type="text" name="first_name" id="firstName" class="form-control form-control-lg" required />
                    <label class="form-label" for="firstName">First Name</label>
                  </div>
                </div>
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <input type="text" name="last_name" id="lastName" class="form-control form-control-lg" required />
                    <label class="form-label" for="lastName">Last Name</label>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4 d-flex align-items-center">
                  <div class="form-outline datepicker w-100">
                    <input type="date" name="birthday" class="form-control form-control-lg" id="birthdayDate" required />
                    <label for="birthdayDate" class="form-label">Birthday</label>
                  </div>
                </div>
                <div class="col-md-6 mb-4">
                  <h6 class="mb-2 pb-1">Gender: </h6>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="femaleGender" value="female" checked />
                    <label class="form-check-label" for="femaleGender">Female</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="maleGender" value="male" />
                    <label class="form-check-label" for="maleGender">Male</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="otherGender" value="other" />
                    <label class="form-check-label" for="otherGender">Other</label>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <input type="text" name="nationality" id="Nationality" class="form-control form-control-lg" required />
                    <label class="form-label" for="Nationality">Nationality</label>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-12 mb-4">
                  <select class="form-select form-select-lg mb-3" name="batting_style" aria-label="Batting Style" required>
                    <option value="" disabled selected>Choose Batting Style</option>
                    <option value="right-handed">Right Handed</option>
                    <option value="left-handed">Left Handed</option>
                  </select>
                </div>
              </div>

              <div class="row">
                <div class="col-md-4 mb-4">
                  <div class="form-outline">
                    <input type="number" name="runs_odi" id="RunsODI" class="form-control form-control-lg" />
                    <label class="form-label" for="RunsODI">Runs in ODI</label>
                  </div>
                </div>
                <div class="col-md-4 mb-4">
                  <div class="form-outline">
                    <input type="number" name="runs_t20" id="RunsT20" class="form-control form-control-lg" />
                    <label class="form-label" for="RunsT20">Runs in T20</label>
                  </div>
                </div>
                <div class="col-md-4 mb-4">
                  <div class="form-outline">
                    <input type="number" name="runs_test" id="RunsTest" class="form-control form-control-lg" />
                    <label class="form-label" for="RunsTest">Runs in Test</label>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-12 mb-4">
                  <select class="form-select form-select-lg mb-3" name="bowling_style" aria-label="Bowling Style" required>
                    <option value="" disabled selected>Choose Bowling Style</option>
                    <option value="right-handed">Right Handed</option>
                    <option value="left-handed">Left Handed</option>
                  </select>
                </div>
              </div>

              <div class="row">
                <div class="col-md-4 mb-4">
                  <div class="form-outline">
                    <input type="number" name="wickets_odi" id="WODI" class="form-control form-control-lg" />
                    <label class="form-label" for="WODI">Wickets in ODI</label>
                  </div>
                </div>
                <div class="col-md-4 mb-4">
                  <div class="form-outline">
                    <input type="number" name="wickets_t20" id="WT20" class="form-control form-control-lg" />
                    <label class="form-label" for="WT20">Wickets in T20</label>
                  </div>
                </div>
                <div class="col-md-4 mb-4">
                  <div class="form-outline">
                    <input type="number" name="wickets_test" id="WTest" class="form-control form-control-lg" />
                    <label class="form-label" for="WTest">Wickets in Test</label>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <input type="text" name="best_runs" id="bestRuns" class="form-control form-control-lg" />
                    <label class="form-label" for="bestRuns">Best Runs</label>
                  </div>
                </div>
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <input type="text" name="best_wickets" id="bestWickets" class="form-control form-control-lg" />
                    <label class="form-label" for="bestWickets">Best Wickets</label>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-12 mb-4">
                  <select class="form-select form-select-lg mb-3" name="team_ipl" aria-label="Team In IPL" required>
                    <option value="" disabled selected>Choose Team in IPL</option>
                    <option value="csk">CSK</option>
                    <option value="dc">DC</option>
                    <option value="mi">MI</option>
                    <option value="srh">SRH</option>
                    <option value="kkr">KKR</option>
                    <option value="pk">PK</option>
                    <option value="lsg">LSG</option>
                    <option value="rr">RR</option>
                    <option value="gt">GT</option>
                    <option value="rcb">RCB</option>
                  </select>
                </div>
              </div>

              <div class="row">
                <div class="col-12 mb-4">
                  <select class="form-select form-select-lg mb-3" name="team_bpl" aria-label="Team In BPL" required>
                    <option value="" disabled selected>Choose Team in BPL</option>
                    <option value="cc">CC</option>
                    <option value="cv">CV</option>
                    <option value="dd">DD</option>
                    <option value="fb">FB</option>
                    <option value="kt">KT</option>
                    <option value="rr">RR</option>
                    <option value="ss">SS</option>
                  </select>
                </div>
              </div>

              <div class="row">
                <div class="col-12 mb-4">
                  <select class="form-select form-select-lg mb-3" name="team_cpl" aria-label="Team In CPL" required>
                    <option value="" disabled selected>Choose Team in CPL</option>
                    <option value="gaw">GAW</option>
                    <option value="snp">SNP</option>
                    <option value="tkp">TKP</option>
                    <option value="abf">ABF</option>
                    <option value="slk">SLK</option>
                    <option value="br">BR</option>
                  </select>
                </div>
              </div>

              <div class="mb-4">
                <label for="description" class="form-label">Player Description</label>
                <textarea class="form-control" id="description" name="description" rows="3" placeholder="Enter player description"></textarea>
              </div>

              <div class="mt-4 pt-2 text-center">
                <input class="btn btn-primary btn-lg" type="submit" value="Add" />
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<script src="{{ asset('bootstrap-5.0.2-dist/js/bootstrap.bundle.js') }}"></script>
</body>
</html>
