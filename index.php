<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="text/javascript" src="data.json"></script>
    <script type="text/javascript" src="javascript/jQuery.js"></script>
    <script type="text/javascript" src="javascript/FormUtil.js"></script>
    <script type="text/javascript" src="javascript/Validation.js"></script>
    <title>Manifest Exhibition</title>
    <style type="text/css">
      * { text-decoration: none; font-family: verdana, helvetica, arial, sans-serif; color: #333333; }
      body{ font-size: 0.625em; margin: 0em; color: #333333; }
      div, ul, p, h1, h2, h3 { margin: 0em; padding: 0em; }
      
      #main { position: relative; margin-left: auto; margin-right: auto; width: 100%; text-align: center; }
      #canvas { width: 100%; height: 100%; }
      
      form { margin: 0em; }
      label { font-size: 2em; }
      input, textarea, select { font-size: 2em; margin: 0.25em 0em 1em 0em; background:#ffffff; padding: 0.5em; border-color: #666666; width: 30em; border-width: 1px; }
      button { margin: 1em 0em 1em 0em; font-size: 2em; background:#ffffff; width: 15em; border-width: 1px; border-color:#666666; padding: 0.8em; -moz-border-radius: 0.25em; -webkit-border-radius: 0.25em }
      button:hover { color: #ff0066; cursor: pointer; border-color: #666666; }
      
      .close { font-size: 2em; background:#ffffff; cursor: pointer; position: absolute; top: 0.25em; right: 0.5em; }
      .close:hover { color: #ff0066; }
      
      #overlay { width: 100%; height: 100%; background: #333333; opacity: 0.5; position: fixed; z-index: 2; display: none; }
      #alert-contain { position: relative; margin-left: auto; margin-right: auto; width: 70em; z-index: 3; display: none; }
      #alert { position: fixed; width: 70em; top: 20em; }
      #alert-border { width: 70em; background-image: url('images/lines.jpg'); opacity: 0.8; height: 63em; -moz-border-radius: 0.5em; -webkit-border-radius: 0.5em; position: absolute; top: 0em; left: 0em; }
      #alert-content { width: 62em; text-align: left; padding: 2em; background: #ffffff; height: 55em; -moz-border-radius: 0.5em; -webkit-border-radius: 0.5em; position: absolute; top: 2em; left: 2em; }
      
      input.error, textarea.error { border: 1px solid #C92100; }
      label.error { color: #c92100; margin-left: 4em; }
    </style>
  </head>
  <body>
    
    <!-- Start Alert Overlay -->
    <div id="overlay"></div>
    <div id="alert-contain">
      <div id="alert">
        <div id="alert-border"></div>
        <div id="alert-content">
          <h2 id="close-form" class="close">X</h2>
          <form action="xmlwriter.php" method="post" accept-charset="utf-8" id="post-form">
            <label for="name">Name</label><label class="error"></label>
            <input type="text" name="name" id="name" class="required" />
            <label for="message">Message</label><label class="error"></label>
            <textarea rows="5" cols="40" name="message" id="message" class="required"></textarea>
            <label for="color">Favorite Color</label>
            <select name="color" id="color">
              <option disabled="disabled">Choose a Color</option>
              <option value="Red">Red</option>
              <option value="Orange">Orange</option>
              <option value="Yellow">Yellow</option>
              <option value="Green">Green</option>
              <option value="Blue">Blue</option>
              <option value="Purple">Purple</option>
              <option value="Pink">Pink</option>
              <option value="Teal">Teal</option>
              <option value="Beige">Beige</option>
              <option value="Grey">Grey</option>
            </select>
            </fieldset>
            <button name="submit" id="submit" type="submit">Submit</button>
          </form>
        </div>
      </div>
    </div>
    <!-- End Alert Overlay -->
    
    <div id="main">
      <button name="post-something" id="post-something" type="submit">Post Something</button>
      
      <div id="canvas"></div>
      
    </div>
    
  </body>
</html>