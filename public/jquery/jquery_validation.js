
     $(document).ready(function(){
         $( "#new_family" ).validate({
             rules: {
                 case_id: {
                     required: true
                 }
                 ,
                 name: {
                     required: true
                 }
                 ,
                 street: {
                     required: true
                 }
                 ,
                 city: {
                     required: true
                 }
                 ,
                 zip: {
                     required: true,
                     range: [10000, 99999]
                     }
                 ,
                 'income_source[]': {
                     required: true
                 }
                 ,
                 income_range_id: {
                     required: true,
                     min: 1
                 }
                 ,
                 referral_id: {
                     required: true,
                     min: 1
                 }
                 ,
                 'abuse[]': {
                     required: true
                 }
                 ,
                 'ina_date[]': {
                     required: true
                 }
             }
             ,
             messages: {

                 zip: "Please enter a valid zip code",
                     // {
                     // required: "Please enter your zip code"
                     // range: "Please enter a valid zip code"
                     // },
                 'income_source[]': "Please select at least one income source.",
                 income_range_id: "Please select an income range.",
                 referral_id: "Please select a referral source.",
                 'abuse[]': "Please select at least one abuse type.",
                 'ina_date[]': "Please select a valid INA Date."

             }
         });
     });

     $(document).ready(function(){
         $( "#new_child" ).validate({
             rules: {
                 name: {
                     required: true
                 }
                 ,
                 'birth_date[]': {
                     required: true
                 }
                 ,
                 gender_id: {
                     required: true
                 }
                 ,
                 race_id: {
                     required: true,
                     min: 1
                 }
             }
             ,
             messages: {
                 'birth_date[]': "Please select the birth date of the child.",
                 gender_id: "Please select the gender of the child",
                 race_id: "Please select the race of the child"
                 }
         });
     });

     $(document).ready(function(){
         $( "#new_caregiver" ).validate({
             rules: {
                 name: {
                     required: true
                 }
                 ,
                 'birth_date[]': {
                     required: true
                 }
                 ,
                 gender_id: {
                     required: true
                 }
                 ,
                 marital_status_id: {
                     required: true,
                     min: 1
                 }
                 ,
                 race_id: {
                     required: true,
                     min: 1
                 }
                 ,
                 education_id: {
                     required: true,
                     min: 1
                 }
                 ,
                 family_role_id: {
                     required: true,
                     min: 1
                 }
             }
             ,
             messages: {
                 'birth_date[]': "Please select the birth date of the caregiver.",
                 gender_id: "Please select the gender of the caregiver",
                 marital_status_id: "Please select the marital status of the caregiver",
                 race_id: "Please select the race of the caregiver",
                 education_id: "Please select the education of the caregiver",
                 family_role_id: "Please select the family role of the caregiver"
             }
         });
     });

     $(document).ready(function(){
         $( "#reabuse" ).validate({
             rules: {
                 'date[]': {
                     required: true
                 }
                 ,
                 abuse_id: {
                     required: true,
                     min: 1
                 }
                 ,
                 outcome_id: {
                     required: true
                 }
                 ,
                 notes: {
                     required: true
                 }
             }
             ,
             messages: {
                 'date[]': "Please select date re-abuse occurred.",
                 'close_reasons[]': "Please select reason(s) for closure.",
                 visits: "Please select the number of visits",
             }
         });
     });

     $(document).ready(function(){
         $( "#close_case" ).validate({
             rules: {
                 'close_reasons[]': {
                     required: true
                 }
                 ,
                  visits: {
                     required: true,
                     min: 1
                 }
                 ,
                 'close_date[]': {
                     required: true
                 }
                 ,
                 closed_notes: {
                     required: true
                 }
                 ,
                 education_id: {
                     required: true,
                     min: 1
                 }
                 ,
                 family_role_id: {
                     required: true,
                     min: 1
                 }
             }
             ,
             messages: {
                 'close_date[]': "Please select the date the case was closed.",
                 'close_reasons[]': "Please select reason(s) for closure.",
                 visits: "Please select the number of visits",
             }
         });
     });