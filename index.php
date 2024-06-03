<html>
    <head>
        <title>Nolivia</title>
        <link rel="stylesheet" href="./index.css">
        <script src="https://kit.fontawesome.com/548f053cec.js" crossorigin="anonymous"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <link rel="icon" type="image/x-icon" href="./image/NOVILLIA.png">
    </head>
    <body>

          <div id="waitingScreen" class="overlay">
          <div class="loading">
            <div class="obj"></div>
            <div class="obj"></div>
            <div class="obj"></div>
            <div class="obj"></div>
            <div class="obj"></div>
            <div class="obj"></div>
            <div class="obj"></div>
            <div class="obj"></div>
            <h2 class="goingThrough1"></h2>
          </div>
          </div>

          <div class="main-heading-back">

            <h2 class="main-heading">
                NOVILLIA
            </h2>       

            <div class="topnav"> 
                <a id="homePageId" onclick="homeButtonClick()" class="active">Home</a>
                <a id="postPageId" onclick="postButtonClick()" >Community</a>
                <a id="chatPageId" onclick="chatButtonClick()" >Chats</a>
                <a class="split" onclick="signInPage()"><i class="fa-regular fa-user"></i></a>
                <div id="accountCentre" class="accountInfo" onclick="toggleDropdown()"></div>
              </div>
              <div class="AccountInfoDropdown-content" id="AccountInfoDropdown">
                <div>
                  <div onclick="openNavForFullAccDetails()" class="accProfile"></div>
                  <h3 class="lables">Username</h3>
                  <h2 class="accName"></h2>
                  <h3 class="lables">Email Address</h3>
                  <h2 class="accEmail"></h2>
                  <h3 class="lables">Uid Token<i onclick="copyUid()" class="fa-solid fa-copy"></i></h3>
                  <div class="userManage">
                    <label class="userManage1" onclick="signInPage()" for=""><i class="fa-solid fa-user-plus"></i></label>
                    <label class="userManage2" onclick="openNavForEditingProfile()" for=""><i class="fa-solid fa-user-pen"></i></label>
                    <label class="userManage3" onclick="logout()" for=""><i class="fa-solid fa-arrow-right-from-bracket"></i></label>
                  </div>
                </div>
            </div>
        </div>


        <div id="myNavForEditingProfile" class="overlayProfileSetting">
            <a href="javascript:void(0)" class="closebtnEP" onclick="closeNavForEditingProfile()">&times;</a>
            <div class="overlayProfileSetting-content">
              <form id="profileEditForm" class="boxPE">
                 <div class="profilePicCns"><div id="profileImage" class="profilePicture"></div></div>
                  <input accept=".jpg, .png, .jpeg, .svg" class="profilePickerInput" id="profilePicker" type="file">

                
                <div class="input-container">
                    <label for="name"></label>
                    <input class="inputsPE1" id="name" type="text" placeholder="nametag">
                    <div class="checkmark1"><i class="fa-solid fa-circle-check"></i></div>
                </div>

                <div class="input-container">
                    <label for="password"></label>
                    <input class="inputsPE2" id="oldpassword" type="text" placeholder="old password">
                    <div class="checkmark2"><i class="fa-solid fa-circle-check"></i></div>
                </div>

                <div class="input-container">
                    <label for="password"></label>
                    <input class="inputsPE3" id="newpassword" type="text" placeholder="new password">
                    <div class="checkmark3"><i class="fa-solid fa-circle-check"></i></div>
                </div>

                <div style="text-align: left;">
                    <div><h4 class="alert1">> Password is incorrect</h4></div>
                    <div><h4 class="alert2">> Your new password must contain a minimum of 8 characters</h4></div>
                    <div><h4 class="alert3">> That nametag is already taken</h4></div>
                </div>

                <button class="submitButton" type="submit">Save</button>
                <button class="submitButtonDecoy" disabled>Save</button>

              </form>
            </div>
          </div>


          <div id="myNavForFullAccDetails" class="overlayAccDetails">
            <div class="prfcontainer">
              <div></div>
              <p id="usernameDisplay"></p>
              <a href="javascript:void(0)" class="closebtnAD" onclick="closeNavForFullAccDetails()">&times;</a>
            </div>
            <div class="overlayAccDetails-content">
              <h5>Email Address</h5>
              <h4 id="emailAddressAD"></h4>
              <h5>Username</h5>
              <h4 id="usernameAD"></h4>
              <h5>Date Created</h5>
              <h4 id="dateCreatedAD"></h4>
              <h5>Uid ( Secret Key )</h5>
              <h4 class="keyManageClass" id="secretKeyAD"><i onclick="copyUid()" class="fa-solid fa-copy"></i></h4>
            </div>
          </div>


          <section class="homePageView">
            <div>
              
            </div>
          </section>


          <section class="postPageView">
            <div>
              <div class="postcontainer">
                <div class="post-form">
                    <input type="text" id="post-input" placeholder="Add a post...">
                    <button id="postAddButtonID" onclick="addPost()">Post</button>
                </div>
                <div class="posts" id="posts-container">
                    <!-- posts -->
                </div>
              </div>
            </div>
          </section>

          <section class="chatPageView">
            <div onclick="viewDmCreatingPopup()" class="createDmButton"><i class="fa-solid fa-plus"></i></div>
            <div class="container74385">
              <div class="dmsContainer" id="dmcontainer">
                <!-- dms -->
              </div>
            </div>
            <div class="chatBox">
              <div class="hotBarForChatDm">
                <div class="container4659">
                  <div class="profileDmForEachDm"></div>
                  <p>Username</p>
                </div>
                <div class="backButtonForDms"><i onclick="exitChatBox()" class="fa-solid fa-circle-chevron-left"></i></div>
              </div>
              <div class="container58496">
                <div class="chatMesseges" id="chat-container4321">
                  <!-- Chat messages -->
                </div> 
              </div>             
              <div class="container7594">
                <input id="textForUserToSend" type="text" placeholder="write a message"></input> 
                <div class="sendButtonCss"><i onclick="sendMessageToUser()" class="fa-solid fa-circle-right"></i></div>
              </div>
            </div>
          </section>

          
          <section class="loginToUse">
            <h3>
              Login to view
            </h3>
          </section>

          <div class="createDMpopup">
            <a href="javascript:void(0)" class="closebtnDMpopup" onclick="closeDmCreatingPopup()">&times;</a>
            <div class="firstDiv284">
              <h5>Name</h5>
              <input id="nameFordm" type="text"></input>
              <h4 class="alert4">> user dont exist</h4>
              <h4 class="alert5">> already exists</h4>
              <h4 class="alert6">> cant dm yourself</h4>
              <div onclick="createDm()" class="createDm">
                create Dm
              </div>

            </div>
          </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/firebase/7.14.1-0/firebase.js"></script>
        <script src="./index.js"></script>       
    </body>
</html>