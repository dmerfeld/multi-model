<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
          <div style="max-width:500px; margin:0 auto; padding:0 20px;">

          <form id="supplierAuditForm" class="mt-10" action="{{ route('surveys.store',2) }}" method="POST">
            {{ csrf_field() }}
            <input type="hidden" name="redirect" value="/surveys/2">
            <input type="hidden" name="supplier_contact_id" value="">

            <section class="section">
            <div class="columns">
              <div class="column">

                <h3 class="heading">Supplier Contact</h3>
                <div class="card mb-20">
                  <div class="card-content">
                    <div class="columns">
                      <div class="column is-3">
                        <h3 class="heading">Education Name</h3>
                        <input type="text" class="input is-medium mb-15" name="education_name" value="" id="education_name" placeholder="">
                      </div>
                    </div>
                  </div>
                </div>
                <h3 class="heading"></h3>
                <div class="card mb-20">
                  <div class="card-content">
                    <div class="columns">
                      <div class="column is-half">
                        <h3 class="heading mt-10">Location Name:</h3>
                        <input type="text" class="input is-medium mb-15" name="location_name" value="" id="location_name" placeholder="">
                      </div>
                    </div>
                    <div class="pl-10 pt-10 pb-20">
                      <div class="columns">
                        <div class="column is-half">
                          <h3 class="heading mt-10">Person Name:</h3>
                          <input type="text" class="input is-medium mb-15" name="person_name" value="" id="person_name" placeholder="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <button class="button is-primary" id="submit-button" name="submit">Submit</button>
              </div>
            </div>
            </section>
          </form>
          </div>
        </div>
    </body>
</html>
