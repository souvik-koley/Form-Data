<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Form-Data</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <section class="form-wrap">
      <div class="form-container">
        <form action="connection.php" id="form" method="POST">
          <div class="form-contaier-box">
            <h1 class="form-title">Contact Survey Form</h1>
            <div class="from-box">
              <div class="form-group">
                <input
                  type="text"
                  class="form-field"
                  id="first-name"
                  placeholder="First Name"
                  name="FirstName"
                />
              </div>
              <div class="form-group">
                <input
                  type="text"
                  class="form-field"
                  id="last-name"
                  placeholder="Last Name"
                  name="LastName"
                />
              </div>
            </div>
            <div class="from-box">
              <div class="form-group">
                <input
                  type="email"
                  class="form-field"
                  id="email"
                  placeholder="Email"
                  name="Email"
                />
              </div>
            </div>
            <div class="from-box">
              <div class="form-group">
                <input
                  type="text"
                  class="form-field"
                  id="number"
                  placeholder="Phone Number"
                  name="Phone"
                />
              </div>
            </div>

            <div class="from-box">
              <div class="btn-step disabled">
                <button type="submit">Submit</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </section>
  </body>
</html>
