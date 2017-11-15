## Video Interview
_Video Interview Example project_
###Install
1. Clone the repo
2. Create .env file
3. composer update
4. php artisan key:generate
5. Add database configurations in .env
6. run php artisan migrate
7. Register at /register
8. Create directory 'uploads' in public dir
9. Login
10. Enter 1 or more questions

### Tasks
- Remove Captcha
- Add Questions Languages CRUD
1. Add migration alters for new languages in the database
2. Add new input in /questions/create page  
- Modify Flow  

_Step 1_  
Personal Information
- Name -required field
- email -required field with email validation
- Languate - select/radio input with following languages - Bulgarian/English

_Step 2_
- Instruction Screen - static content in selected language
- Action Button - 'Start the Interview'

_Step 3_
- Video section
- Start Recording Button  
After press start recording button a list with active questions appear in the appropriate language. 
After click on the last questions Action Button labels goes to 'Finish Interview'
After click on the button the video stops and stores in public/uploads directory.
A message for Thank you for your attention in the appropriate language appear  
- All applications should be stored in the database and appear in admin panel new section - Interviews with the following fields
Name, Email, Application Date, Video

###Notes
1. Firefox is preferred
2. videojs-record plugin is used [link](https://github.com/collab-project/videojs-record).
3. Don't be afraid to refactor existing functionaries
4. We are always available for any questions  
