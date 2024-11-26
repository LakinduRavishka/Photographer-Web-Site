README: Photographer Portfolio Website

Project Overview
This website is a professional portfolio for showcasing a freelance photographer’s work, enabling user inquiries, and managing bookings and customer interactions. It includes a clean and modern design, responsive functionality, and a dynamic backend to handle user interactions effectively. The website is tailored for **Malcolm Lismore**, highlighting his photography services and portfolio while allowing seamless communication with potential clients.

Features
1. Responsive Navigation Bar 
   - Links to key sections: Bookings, Messages, Customers.  
   - Active link styling with dynamic font color for the current page.

2. User-Friendly Forms  
   - Booking Form: Captures customer details (Name, Email, Date, Mobile Number, Package).  
   - Login Form: Validates admin credentials and redirects to the dashboard.

3. **Admin Dashboard**  
   - **View Bookings**: Displays all bookings stored in the database.  
   - **View Messages**: Lists customer inquiries with name, subject, and message.  
   - **Manage Bookings**: Allows admins to delete bookings directly from the dashboard.

4. **Dynamic Functionality**  
   - Fully integrated with a MySQL database to manage bookings, messages, and admin authentication.  
   - Logout functionality securely ends admin sessions and redirects to the homepage.

5. **Custom Styling**  
   - Unique theme colors (#FDB40A, #FFFFFF, #3D1C63, #010713) for a consistent and professional look.  
   - Font Awesome icons for enhanced visual appeal.

---

### **Tech Stack**
1. **Frontend**  
   - HTML5, CSS3 (External CSS styling).  
   - Bootstrap 5 for responsive and modern design elements.  
   - Font Awesome for icons.

2. **Backend**  
   - PHP for dynamic content generation and form handling.  
   - MySQL database for storing bookings, messages, and admin details.

3. **Database**  
   - Tables:  
     - `customers`: Stores booking details (ID, Name, Email, Date, Mobile Number, Package).  
     - `messages`: Stores customer inquiries (ID, Name, Subject, Message).  
     - `admin`: Stores admin login credentials (Username, Password).

---

### **How to Use**
1. **For Visitors**  
   - Browse the portfolio and use the contact/booking form to get in touch or book services.  
   - Download the photographer's CV using the provided button.

2. **For Admin**  
   - Log in using the provided admin credentials.  
   - Access the dashboard to view and manage bookings and customer inquiries.

---

### **Setup Instructions**
1. **Clone the Repository**
   ```bash
   git clone <repository-url>
   cd <project-folder>
   ```

2. **Setup the Database**
   - Use the provided SQL queries to create the database tables:
     - `customers`
     - `messages`
     - `admin`
   - Insert default admin credentials using the provided `INSERT` query.

3. **Configure the Project**
   - Update database connection details in the PHP files (`$servername`, `$username`, `$password`, `$dbname`).

4. **Run the Website**
   - Host the project on a local server (e.g., XAMPP, WAMP).  
   - Access the site through `http://localhost/<project-folder>`.

---

### **Files and Structure**
- **Frontend**:  
  - `index.html`: Homepage with portfolio details.  
  - `Bookings.php`: Admin dashboard for managing bookings.  
  - `contact.php`: Contact form for messages.  

- **Backend**:  
  - `login.php`: Admin login validation.  
  - `bookingCode.php`: Handles booking submissions.  
  - `deleteBooking.php`: Deletes bookings.  
  - `logout.php`: Ends admin session.

- **Assets**:  
  - `Style.css`: Custom styling for the website.  
  - Font Awesome and Bootstrap integrated through CDN.

---

### **Credits**
This website was designed and developed for **Malcolm Lismore**, a freelance photographer, to provide an interactive and seamless platform for showcasing his work and managing client interactions.

---

Feel free to customize this description further based on specific project details!
