<div class="container">
      <div class="row">
        <div class="col-4">
          PICTURE OF HAPPY CHILD
        </div>
        <div class="col-8">
          You're helping x children not starve to death!
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <h2>Donor and Tax Receipt Information</h2>
        <div class="col-12">
          <form>
              <div class="form-group email">
                <label for="emailInput">Email address</label>
                <input type="email" class="form-control" id="emailInput"  placeholder="Enter email" required>
              </div>
              <div class="form-group donor-type">
                  <label for="donorType">Donor Type</label>
                  <select class="form-control" id="donorType" required>
                    <option>Personal</option>
                    <option>Corporate/Group</option>
                  </select>
            </div>
            <div class="form-group company-name">
                <label for="compName">Company Name/Group</label>
                <input type="text" class="form-control" id="compName" required>
            </div>
            <div class="form-group name">
                <label for="fName">First Name</label>
                <input type="text" class="form-control" id="fName" required>
            </div>
            <div class="form-group name">
                <label for="lName">First Name</label>
                <input type="text" class="form-control" id="lName" required>
            </div>
            <div class="form-group address">
                <label for="address">Address</label>
                <input type="text" class="form-control" id="aLine1" placeholder="Address Line 1" required>
                <input type="text" class="form-control" id="aLine2" placeholder="Address Line 2" required>
            </div>
            
            
            
        </div>
            <h2>Payment Information</h2>
        <div class="col-12">
          
          <div class="form-check form-check-inline">  
                <input class="form-check-input" type="radio" id="inlineCheckbox1" value="option1">
                <label class="form-check-label" for="inlineCheckbox1">Credit Card</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" id="inlineCheckbox2" value="option2">
            <label class="form-check-label" for="inlineCheckbox2">Paypal</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" id="inlineCheckbox3" value="option3" disabled>
            <label class="form-check-label" for="inlineCheckbox3">Gift Card (disabled)</label>
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Complete Donation Now</button>
        </form>
    </div>
</div>