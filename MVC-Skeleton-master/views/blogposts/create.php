<?php session_start();?>

<p>Fill in the following form to create a post:</p>
<form action="" method="POST" class="w3-container" enctype="multipart/form-data">
    <h2>Create Post</h2>
    
    <p>
        <div class="form-group col-md-12">
            <label>Title</label><br>
        <input class="w3-input" type="text" name="Title" >
        </div>
    </p>
    <p> 
        <div class="form-group col-md-12">
            <label>Date Published</label><br>
        <input class="w3-input" type="text" name="DatePublished" Placeholder= "YYYY-MM-DD" >
        </div>
    </p>
    <p>
        <div class="form-group col-md-12">
  <label for="WriterID">Writer</label>
  <select class="form-control" id="WriterID" name="WriterID">
    <option value="1">John Murray</option>
    <option value="2">Andrea Orset</option>
    <option value="3">Penny Yiota</option>
    <option value="4">Kiera Kenney</option>
  </select>
        </div>
 
    </p>
    <p>
        <div class="form-group col-lg-12">
            <label>Content</label><br>
        <input class="w3-input" type="text" name="Content" rows='5'>
        </div>
    </p>
    <div class="form-group col-md-12">
  <label for="KeywordID">Keyword</label>
  <select class="form-control" id="KeywordID" name="KeywordID">
    <option value="1">Beech</option>
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
    <select class="form-control" id="CountryID" name='CountryID'>
    <option value="1">Afghanistan</option>
    <option value="2">Albania</option>
    <option value="3">Algeria</option>
    <option value="4">Andorra</option>
     <option value="5">Angola</option>
    <option value="6">Antigua and Barbuda</option>
    <option value="7">Argentina</option>
    <option value="8">Armenia</option>
      <option value="9">Aruba</option>
    <option value="10">Australia</option>
    <option value="11">Austria</option>
    <option value="12">Azerbaijan</option>
     <option value="13">The Bahamas</option>
    <option value="14">Bahrain</option>
    <option value="15">Bangladesh</option>
    <option value="16">Barbados</option>
    <option value="17">Belarus</option>
    <option value="18">Belgium</option>
    <option value="19">Belize</option>
    <option value="20">Benin</option>
     <option value="21">Bhutan</option>
    <option value="22">Bolivia</option>
    <option value="23">Bosnia and Herzegovina</option>
    <option value="24">Botswana</option>
      <option value="25">Brazil</option>
    <option value="26">Brunei</option>
    <option value="27">Bulgaria</option>
    <option value="28">Burkina Faso</option>
     <option value="29">Burma</option>
    <option value="30">Burundi</option>
    <option value="31">Cambodia</option>
    <option value="32">Cameroon</option>
    <option value="33">Canada</option>
    <option value="34">Cabo Verde</option>
    <option value="35">Central African Republic</option>
    <option value="36">Chad</option>
     <option value="37">Chile</option>
    <option value="38">China</option>
    <option value="39">Colombia</option>
    <option value="40">Comoros</option>
      <option value="41">Democratic Republic of the Congo</option>
    <option value="42">Republic of the Congo</option>
    <option value="43">Costa Rica</option>
    <option value="44">Cote d'Ivoire</option>
     <option value="45">Croatia</option>
    <option value="46">Cuba</option>
    <option value="47">Curacao</option>
    <option value="48">Cyprus</option>
    <option value="49">Czechia</option>
    <option value="50">Denmark</option>
    <option value="51">Djibouti</option>
    <option value="52">Dominica</option>
     <option value="53">Dominican Republic</option>
    <option value="54">Ecuador</option>
    <option value="55">Egypt</option>
    <option value="56">El Salvador</option>
      <option value="57">Equatorial Guinea</option>
    <option value="58">Eritrea</option>
    <option value="59">Estonia</option>
    <option value="60">Ethiopia</option>
     <option value="61">Fiji</option>
    <option value="62">Finland</option>
    <option value="63">France</option>
    <option value="64">Gabon</option>
    <option value="65">The Gambia</option>
    <option value="66">Georgia</option>
    <option value="67">Germany</option>
    <option value="68">Ghana</option>
     <option value="69">Greece</option>
    <option value="70">Grenada</option>
    <option value="71">Guatemala</option>
    <option value="72">Guinea</option>
      <option value="73">Guinea-Bissau</option>
    <option value="74">Guyana</option>
    <option value="75">Haiti</option>
    <option value="76">Holy See</option>
     <option value="77">Honduras</option>
    <option value="78">Hong Kong</option>
    <option value="79">Hungary</option>
    <option value="80">Iceland</option>
    <option value="81">India</option>
    <option value="82">Indonesia</option>
    <option value="83">Iran</option>
    <option value="84">Iraq</option>
     <option value="85">Ireland</option>
    <option value="86">Israel</option>
    <option value="87">Italy</option>
    <option value="88">Jamaica</option>
      <option value="89">Japan</option>
    <option value="90">Jordan</option>
    <option value="91">Kazakhstan</option>
    <option value="92">Kenya</option>
     <option value="93">Kiribati</option>
    <option value="94">North Korea</option>
    <option value="95">South Korea</option>
    <option value="96">Kosovo</option>
    <option value="97">Kuwait</option>
    <option value="98">Kyrgyzstan</option>
    <option value="99">Laos</option>
    <option value="100">Latvia</option>
     <option value="101">Lebanon</option>
    <option value="102">Lesotho</option>
    <option value="103">Liberia</option>
    <option value="104">Libya</option>
      <option value="105">Liechtenstein</option>
    <option value="106">Lithuania</option>
    <option value="107">Luxembourg</option>
    <option value="108">Macau</option>
     <option value="109">Macedonia</option>
    <option value="110">Madagascar</option>
    <option value="111">Malawi</option>
    <option value="112">Malaysia</option>
    <option value="113">Maldives</option>
    <option value="114">Mali</option>
    <option value="115">Malta</option>
    <option value="116">Marshall Islands</option>
     <option value="117">Mauritania</option>
    <option value="118">Mauritius</option>
    <option value="119">Mexico</option>
    <option value="120">Micronesia</option>
      <option value="121">Moldova</option>
    <option value="122">Monaco</option>
    <option value="123">Mongolia</option>
    <option value="124">Montenegro</option>
     <option value="125">Morocco</option>
    <option value="126">Mozambique</option>
    <option value="127">Namibia</option>
    <option value="128">Nauru</option>
    <option value="129">Nepal</option>
    <option value="130">Netherlands</option>
    <option value="131">New Zealand</option>
    <option value="132">Nicaragua</option>
     <option value="133">Niger</option>
    <option value="134">Nigeria</option>
    <option value="135">North Korea</option>
    <option value="136">Norway</option>
      <option value="137">Oman</option>
    <option value="138">Pakistan</option>
    <option value="139">Palau</option>
    <option value="140">Palestinian Territories</option>
     <option value="141">Panama</option>
    <option value="142">Papua New Guinea</option>
    <option value="143">Paraguay</option>
    <option value="144">Peru</option>
    <option value="145">Philippines</option>
    <option value="146">Poland</option>
    <option value="147">Portugal</option>
    <option value="148">Qatar</option>
     <option value="149">Romania</option>
    <option value="150">Russia</option>
    <option value="151">Rwanda</option>
    <option value="152">Saint Kitts and Nevis</option>
      <option value="153">Saint Lucia</option>
    <option value="154">Saint Vincent and the Grenadines</option>
    <option value="155">Samoa</option>
    <option value="156">San Marino</option>
     <option value="157">Sao Tome and Principe</option>
    <option value="158">Saudi Arabia</option>
    <option value="159">Senegal</option>
    <option value="160">Serbia</option>
    <option value="161">Seychelles</option>
    <option value="162">Sierra Leone</option>
    <option value="163">Singapore</option>
    <option value="164">Sint Maarten</option>
     <option value="165">Slovakia</option>
    <option value="166">Slovenia</option>
    <option value="167">Solomon Islands</option>
    <option value="168">Somalia</option>
      <option value="169">South Africa</option>
    <option value="170">South Korea</option>
    <option value="171">South Sudan</option>
    <option value="172">Spain</option>
     <option value="173">Sri Lanka</option>
    <option value="174">Sudan</option>
    <option value="175">Suriname</option>
    <option value="176">Swaziland</option>
    <option value="177">Sweden</option>
    <option value="178">Switzerland</option>
    <option value="179">Syria</option>
    <option value="180">Taiwan</option>
     <option value="181">Tajikistan</option>
    <option value="182">Tanzania</option>
    <option value="183">Thailand</option>
    <option value="184">Timor-Leste</option>
      <option value="185">Togo</option>
    <option value="186">Tonga</option>
    <option value="187">Trinidad and Tobago</option>
    <option value="188">Tunisia</option>
     <option value="189">Turkey</option>
    <option value="190">Turkmenistan</option>
    <option value="191">Tuvalu</option>
    <option value="192">Uganda</option>
    <option value="193">Ukraine</option>
    <option value="194">United Arab Emirates</option>
    <option value="195">United Kingdom</option>
    <option value="196">Uruguay</option>
     <option value="197">Uzbekistan</option>
    <option value="198">Vanuatu</option>
    <option value="199">Venezuela</option>
    <option value="200">Vietnam</option>
      <option value="201">Yemen</option>
    <option value="202">Zambia</option>
    <option value="203">Zimbabwe</option>
  </select>
</div>
      <div class="form-group col-md-12">      
  <input type="hidden" name="MAX_FILE_SIZE" value="10000000" />

  <br/>
  <input type="file" name="myUploader" class="w3-btn w3-pink" />
  <p>
    <input class="w3-btn w3-gray" type="submit" value="Create blogpost">
      </div>
    </p>
</form>