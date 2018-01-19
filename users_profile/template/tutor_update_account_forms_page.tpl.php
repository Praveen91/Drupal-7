<div class="grey-big-rounded-box mb32 mt32">
          <div class="p32 over-hidden">
             <div class="row">

                  <div class="col-md-3">
                      <div class="pl32 pr32">
                          <div class="fullwidth FontFamily1 FontFamily1-Light f-1 FontGrey1 mb64 mt64">Edit Profile:</div>

                      <div class="grey-link">
                          <div class="left-link">
                            <ul>
                                <li class="showSingle edit-profile active" target="1">Personal Info</li>
                                <li class="showSingle edit-profile" target="2">languages</li>
                                <li class="showSingle edit-profile" target="3">Background</li>
                                <li class="showSingle edit-profile" target="4">Education</li>
                                <li class="showSingle edit-profile" target="5">work experience</li>
                            </ul>
                          </div>
                      </div>

                        </div>
                    </div>

                    <div class="col-md-9">
                        <div class="left-grey-border fullwidth min-height500">

                         <div class="pl32 pr32">
                            <div class="targetDiv" id="div1">
                              <?php print $tutor_info; ?>
                            </div>
                            <div class="targetDiv" id="div2" style="display:none;">
                              <?php print $tutor_languages; ?>
                            </div>
                            <div class="targetDiv" id="div3" style="display:none;">
                              <?php print $tutor_background; ?>
                            </div>
                            <div class="targetDiv" id="div5" style="display:none;" >
                                <?php print $work_experience; ?>
                            </div>
                            <div class="targetDiv" id="div4" style="display:none;">
                                 <?php print $tutor_education; ?>
                            </div>

                         </div>
                        </div>
                    </div>

             </div>
          </div>
</div>
