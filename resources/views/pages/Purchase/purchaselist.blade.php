@extends('layout.app')

@section('app_name', 'Purchase')
@section('content')
<main class="content">

    {{-- <div class="row">
        <div class="col">
          <input type="text" class="form-control" placeholder="First name" aria-label="First name">
        </div>
        <div class="col">
          <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
        </div>
        <div class="col">
          <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
        </div>
        <div class="col">
          <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
        </div>
      </div>

      <div class="table-responsive">
        <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
            <th scope="col">Handle</th>
            <th scope="col">Handle</th>
            <th scope="col">Handle</th>
            <th scope="col">Handle</th>
            <th scope="col">Handle</th>
            <th scope="col">Handle</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td><div class="row">
                <input type="text" class="form-control" placeholder="First name" aria-label="First name">
              </div></td>
            <td><div class="row">
                <input type="text" class="form-control" placeholder="First name" aria-label="First name">
              </div></td>
            <td><div class="row">
                <input type="text" class="form-control" placeholder="First name" aria-label="First name">
              </div></td>
            <td><div class="row">
                <input type="text" class="form-control" placeholder="First name" aria-label="First name">
              </div></td>
            <td><div class="row">
                <input type="text" class="form-control" placeholder="First name" aria-label="First name">
              </div></td>
            <td><div class="row">
                <input type="text" class="form-control" placeholder="First name" aria-label="First name">
              </div></td>
            <td><div class="row">
                <input type="text" class="form-control" placeholder="First name" aria-label="First name">
              </div></td>
            <td><div class="row">
                <input type="text" class="form-control" placeholder="First name" aria-label="First name">
              </div></td>
            <td><div class="row">
                <input type="text" class="form-control" placeholder="First name" aria-label="First name">
              </div></td>

          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
          </tr>
          <tr>
            <th scope="row"></th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
          </tr>

        </tbody>
    </table> --}}
{{-- </div> --}}


<div class="table-responsive">
    <table id="example" class="table" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Age</th>
                <th>Position</th>
                <th>Office</th>
                <th>Name</th>
                <th>Age</th>
                <th>Position</th>
                <th>Office</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><input type="text" id="row-1-age" name="row-1-age" value="61"></td>

                <td><input type="text" id="row-1-age" name="row-1-age" value="61"></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value="System Architect"></td>
                <td><select size="1" id="row-1-office" name="row-1-office">
                    <option value="Edinburgh" selected="selected">
                        Edinburgh
                    </option>
                    <option value="London">
                        London
                    </option>
                    <option value="New York">
                        New York
                    </option>
                    <option value="San Francisco">
                        San Francisco
                    </option>
                    <option value="Tokyo">
                        Tokyo
                    </option>
                </select></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value="System Architect"></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value="System Architect"></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value="System Architect"></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value="System Architect"></td>
                       </tr>

        </tbody>
        {{-- <tfoot>
            <tr>
                <th>Name</th>
                <th>Age</th>
                <th>Position</th>
                <th>Office</th>
                <th>Name</th>
                <th>Age</th>
                <th>Position</th>
                <th>Office</th>
            </tr>
        </tfoot> --}}
    </table>
</div>
<button type="submit">Submit form</button>
</section>
</main>
@endsection
