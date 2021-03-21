# Your Challenge

Your challenge is a mix of tasks focussed around the day to day role of a PHP WordPress developer.
You may not get all of the tasks below completed, and it's at your discretion which you focus the most time to within each task. 

Please spend around 3 hours on the challenge, plus any time needed to get your environment up and running. If you need any assistance getting your environment running, please contact `ian@komododigital.co.uk` or the Komodo offices and we will support ASAP. 

Note: Do not worry if you do not complete the challenge or the all the tasks. Please spend your time as you best see fit, particularly with a view to demonstrating your technical strengths.

Following the test, we will schedule a review conversation with you in due course, to discuss how the test went, your proposed solution, and ask wider questions around your background, experience, and suitability for the role.

## Scenario:

A client has asked for a plugin that they can install on their WordPress installation and use a shortcode to add a contact form to capture inbound support messages from their customers. The plugin should capture the resonses, and show them in the WordPress admin, in a sensible way.

You must be able to provide your solution in a zip file to Komodo to review and test.

## Tasks:

1. Setup and ensure the development environment is running correctly. Follow the setup instructions in `docs/setup.md`.
   - Visiting `http://localhost/` - You should see the WordPress setup page.
   - Using a mysql client of your preference, connect to the database and verify its a standard WP installation.
2. Create and sensibly structure the plugin to facilitate the use of a shortcode to add a "contact us" form to a post or page that captures the users full name, address, telephone number, email address, and a message / note. 
   - Ensure to add in relevant validation. 
3. Store submissions from the form into a sensibly structured MySQL database.
   - Include database migrations for the database schema.
   - Add a seeder for fake / test submissions.
4. Ensure that we can inspect the database and see the submissions made through the form.
5. Please use version control (GIT) to track your changes in code locally (no need for a remote).
6. Add an area in the WP admin panel that we can log into and view all the submissions.
7. Include any relevant tests or measures of code quality control. 

## Rules and Notes

 - **If you get stuck or have any questions - ask for help!**
 - Please ensure that the solution you supply back to Komodo is in a fit and working state for review.
   > Please include any documentation or additional setup instructions we need in order to run and test your solution.
   > Your solution will be run and tested on Mac OS X
 - Feel free to use the internet as much as you would like to help you complete the task - but please do not plagerise other peoples code to provide your solution.
 - Novel, efficient, well structured and sensible solutions are encouraged.

**Thank you very much, good luck, and happy coding!**