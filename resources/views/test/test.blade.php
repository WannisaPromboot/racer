<form action="#" method="POST"> 
    <input id="name" type="text" maxlength="250" placeholder="Holder Name" value=""><br/>
    <input id="number" type="text" maxlength="16" placeholder="Card Number" value=""><br/>
    <input id="expirationMonth" type="text" maxlength="2" placeholder="MM" value=""><br/>
    <input id="expirationYear" type="text" maxlength="2" placeholder="YY (Last Two Digits)" value=""><br/>
    <input id="securityCode" type="password" maxlength="3" autocomplete="off" placeholder="CVV" value=""><br/>
    <input id="button" type="submit" value="Pay Now">
  </form>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script>
    document.getElementById("button").addEventListener("click", function(event){
      event.preventDefault();
      var publicKey = "N5RE25nRUuHUb2TAJqEJkhz0Xjg7d22C";
      var dataReq = {
        "rememberCard": false,
        "card": {
            "name": "",
            "number": "",
            "expirationMonth": "",
            "expirationYear": "",
            "securityCode": ""
        }
      };
      $.ajax({
          type: "POST",
          url: "{ENV}/v1/tokens", // test URL: https://api.globalprimepay.com/v1/tokens , Live URL: https://api.gbprimepay.com/1/tokens
          data: JSON.stringify(dataReq),
          contentType: "application/json",
          dataType: "json",
          headers: {
            "Authorization": "Basic " + btoa(publicKey + ":")
          },
          success: function(dataResp){
            var dataStr = JSON.stringify(dataResp);
            alert(dataStr);
          },
          failure: function(errMsg) {
            alert(errMsg);
          }
      });
    });
  </script>