<p>Fill in the following form to create a post:</p>
<form action="" method="POST" class="w3-container" enctype="multipart/form-data">
    <h2>Create Post</h2>
    
    <p>
        <div class="form-group col-md-12">
            <label>Title</label><br>
        <input class="w3-input" type="text" name="Title" required>
        </div>
    </p>
    <p> 
        <div class="form-group col-md-12">
            <label>Date Published</label><br>
            <input class="w3-input" type="datetime-local" name="DatePublished" Placeholder= "YYYY-MM-DD" required>
        </div>
    </p>
    <p>
        <div class="form-group col-md-12">
  <label for="WriterID">Writer</label>
  <select class="form-control" id="WriterID" name="WriterID" required>
    <option value="1">John Murray</option>
    <option value="2">Andrea Orset</option>
    <option value="3">Penny Yiota</option>
    <option value="4">Kiera Kenney</option>
  </select>
        </div>
 
    </p>
    <p>
        <div class="form-group col-lg-12">
            <label>Paragraph 1</label><br>
        <input class="w3-input" type="text" name="ContentP1" rows='5' required>
        </div>
    </p>
    <p>
        <div class="form-group col-lg-12">
            <label>Paragraph 2</label><br>
        <input class="w3-input" type="text" name="ContentP2" rows='5' required>
        </div>
    </p>
    <div class="form-group col-md-12">
  <label for="KeywordID">Keyword</label>
  <select class="form-control" id="KeywordID" name="KeywordID" required>
    <option value="1">Beach</option>
    <option value="2">Cuisine</option>
    <option value="3">Lesser Known</option>
    <option value="4">Scandanavia</option>
     <option value="5">Adventure</option>
      <option value="6">Budget</option>
       <option value="7">Relaxation</option>
  </select>
        </div>
    <div class="form-group col-md-12">
  <label for="CountryID">Country</label>
    <select class="form-control" id="CountryID" name='CountryID' required>
    <option value="1">Afghanistan</option>
    <option value="2">Albania</option>
    <option value="3">Andorra</option>
     <option value="4">Angola</option>
    <option value="5">Antigua and Barbuda</option>
    <option value="6">Argentina</option>
    <option value="7">Armenia</option>
      <option value="8">Aruba</option>
    <option value="9">Australia</option>
    <option value="10">Austria</option>
    <option value="11">Azerbaijan</option>
     <option value="12">The Bahamas</option>
    <option value="13">Bahrain</option>
    <option value="14">Bangladesh</option>
    <option value="15">Barbados</option>
    <option value="16">Belarus</option>
    <option value="17">Belgium</option>
    <option value="18">Belize</option>
    <option value="19">Benin</option>
     <option value="20">Bhutan</option>
    <option value="21">Bolivia</option>
    <option value="22">Bosnia and Herzegovina</option>
    <option value="23">Botswana</option>
      <option value="24">Brazil</option>
    <option value="25">Brunei</option>
    <option value="26">Bulgaria</option>
    <option value="27">Burkina Faso</option>
     <option value="28">Burma</option>
    <option value="29">Burundi</option>
    <option value="30">Cambodia</option>
    <option value="31">Cameroon</option>
    <option value="32">Canada</option>
    <option value="33">Cabo Verde</option>
    <option value="34">Central African Republic</option>
    <option value="35">Chad</option>
     <option value="36">Chile</option>
    <option value="37">China</option>
    <option value="38">Colombia</option>
    <option value="39">Comoros</option>
      <option value="40">Democratic Republic of the Congo</option>
    <option value="41">Republic of the Congo</option>
    <option value="42">Costa Rica</option>
    <option value="43">Cote d'Ivoire</option>
     <option value="44">Croatia</option>
    <option value="45">Cuba</option>
    <option value="46">Curacao</option>
    <option value="47">Cyprus</option>
    <option value="48">Czechia</option>
    <option value="49">Denmark</option>
    <option value="50">Djibouti</option>
    <option value="51">Dominica</option>
     <option value="52">Dominican Republic</option>
    <option value="53">Ecuador</option>
    <option value="54">Egypt</option>
    <option value="55">El Salvador</option>
      <option value="56">Equatorial Guinea</option>
    <option value="57">Eritrea</option>
    <option value="58">Estonia</option>
    <option value="59">Ethiopia</option>
     <option value="60">Fiji</option>
    <option value="61">Finland</option>
    <option value="62">France</option>
    <option value="63">Gabon</option>
    <option value="64">The Gambia</option>
    <option value="65">Georgia</option>
    <option value="66">Germany</option>
    <option value="67">Ghana</option>
     <option value="68">Greece</option>
    <option value="69">Grenada</option>
    <option value="70">Guatemala</option>
    <option value="71">Guinea</option>
      <option value="72">Guinea-Bissau</option>
    <option value="73">Guyana</option>
    <option value="74">Haiti</option>
    <option value="75">Holy See</option>
     <option value="76">Honduras</option>
    <option value="77">Hong Kong</option>
    <option value="78">Hungary</option>
    <option value="79">Iceland</option>
    <option value="80">India</option>
    <option value="81">Indonesia</option>
    <option value="82">Iran</option>
    <option value="83">Iraq</option>
     <option value="84">Ireland</option>
    <option value="85">Israel</option>
    <option value="86">Italy</option>
    <option value="87">Jamaica</option>
      <option value="88">Japan</option>
    <option value="89">Jordan</option>
    <option value="90">Kazakhstan</option>
    <option value="91">Kenya</option>
     <option value="92">Kiribati</option>
    <option value="93">North Korea</option>
    <option value="94">South Korea</option>
    <option value="95">Kosovo</option>
    <option value="96">Kuwait</option>
    <option value="97">Kyrgyzstan</option>
    <option value="98">Laos</option>
    <option value="99">Latvia</option>
     <option value="100">Lebanon</option>
    <option value="101">Lesotho</option>
    <option value="102">Liberia</option>
    <option value="103">Libya</option>
      <option value="104">Liechtenstein</option>
    <option value="105">Lithuania</option>
    <option value="106">Luxembourg</option>
    <option value="107">Macau</option>
     <option value="108">Macedonia</option>
    <option value="109">Madagascar</option>
    <option value="110">Malawi</option>
    <option value="111">Malaysia</option>
    <option value="112">Maldives</option>
    <option value="113">Mali</option>
    <option value="114">Malta</option>
    <option value="115">Marshall Islands</option>
     <option value="116">Mauritania</option>
    <option value="117">Mauritius</option>
    <option value="118">Mexico</option>
    <option value="119">Micronesia</option>
      <option value="120">Moldova</option>
    <option value="121">Monaco</option>
    <option value="122">Mongolia</option>
    <option value="123">Montenegro</option>
     <option value="124">Morocco</option>
    <option value="125">Mozambique</option>
    <option value="126">Namibia</option>
    <option value="127">Nauru</option>
    <option value="128">Nepal</option>
    <option value="129">Netherlands</option>
    <option value="130">New Zealand</option>
    <option value="131">Nicaragua</option>
     <option value="132">Niger</option>
    <option value="133">Nigeria</option>
    <option value="134">North Korea</option>
    <option value="135">Norway</option>
      <option value="136">Oman</option>
    <option value="137">Pakistan</option>
    <option value="138">Palau</option>
    <option value="139">Palestinian Territories</option>
     <option value="140">Panama</option>
    <option value="141">Papua New Guinea</option>
    <option value="142">Paraguay</option>
    <option value="143">Peru</option>
    <option value="144">Philippines</option>
    <option value="145">Poland</option>
    <option value="146">Portugal</option>
    <option value="147">Qatar</option>
     <option value="148">Romania</option>
    <option value="149">Russia</option>
    <option value="150">Rwanda</option>
    <option value="151">Saint Kitts and Nevis</option>
      <option value="152">Saint Lucia</option>
    <option value="153">Saint Vincent and the Grenadines</option>
    <option value="154">Samoa</option>
    <option value="155">San Marino</option>
     <option value="156">Sao Tome and Principe</option>
    <option value="157">Saudi Arabia</option>
    <option value="158">Senegal</option>
    <option value="159">Serbia</option>
    <option value="160">Seychelles</option>
    <option value="161">Sierra Leone</option>
    <option value="162">Singapore</option>
    <option value="163">Sint Maarten</option>
     <option value="164">Slovakia</option>
    <option value="165">Slovenia</option>
    <option value="166">Solomon Islands</option>
    <option value="167">Somalia</option>
      <option value="168">South Africa</option>
    <option value="169">South Korea</option>
    <option value="170">South Sudan</option>
    <option value="171">Spain</option>
     <option value="172">Sri Lanka</option>
    <option value="173">Sudan</option>
    <option value="174">Suriname</option>
    <option value="175">Swaziland</option>
    <option value="176">Sweden</option>
    <option value="177">Switzerland</option>
    <option value="178">Syria</option>
    <option value="179">Taiwan</option>
     <option value="180">Tajikistan</option>
    <option value="181">Tanzania</option>
    <option value="182">Thailand</option>
    <option value="183">Timor-Leste</option>
      <option value="184">Togo</option>
    <option value="185">Tonga</option>
    <option value="186">Trinidad and Tobago</option>
    <option value="187">Tunisia</option>
     <option value="188">Turkey</option>
    <option value="189">Turkmenistan</option>
    <option value="190">Tuvalu</option>
    <option value="191">Uganda</option>
    <option value="192">Ukraine</option>
    <option value="193">United Arab Emirates</option>
    <option value="194">United Kingdom</option>
    <option value="202">United States of America</option>
    <option value="195">Uruguay</option>
     <option value="196">Uzbekistan</option>
    <option value="197">Vanuatu</option>
    <option value="198">Venezuela</option>
    <option value="199">Vietnam</option>
      <option value="200">Yemen</option>
      <option value="201">Zambia</option>
      <option value="202">Zimbabwe</option>
  </select>
</div>

<!--IMAGE UPLOADS-->
<div class="form-group col-md-12">
    <input type="hidden" name="MAX_FILE_SIZE" value="10000000" />
    <p>Upload 1 featured image:</p> <input type="file" name="myUploader" required/>
    <br>
    <br>
    <input type="hidden" name="MAX_FILE_SIZE" value="10000000"/>
    <p>Upload secondary image 1:</p> <input id="myUploader1" type="file" name="myUploader1" required/>
    <br>
    <br>
    <input type="hidden" name="MAX_FILE_SIZE" value="10000000"/>
    <p>Upload secondary image 2:</p> <input id="myUploader2" type="file" name="myUploader2"required/>
    <br>
    <br>
    <input type="hidden" name="MAX_FILE_SIZE" value="10000000"/>
    <p>Upload secondary image 3:</p> <input id="myUploader3" type="file" name="myUploader3"required/>
    <br>
    <br>
    <br>
    <input class="btn btn-secondary" type="submit" value="submit">
</div>
    </p>
</form>

<!--<script>
    $(function(){
    $("input[type='submit']").click(function(){
        var $fileUpload = $("input[type='file']");
        if (parseInt($fileUpload.get(0).files.length)>3){
         alert("You can only upload a maximum of 3 secondary images!");
        }
        else {$("myUploader").submit(); 
    });    
)};
</script>-->