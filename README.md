# README.txt  

## **Digitalized Grey Literature: Knowledge-based System for Divine Word College of Legazpi**  

### **Project Overview**  
This project aims to develop a **Knowledge-Based System** for managing **grey literature** (such as theses, dissertations, and capstone projects) at **Divine Word College of Legazpi**. The system digitalizes academic research and provides an efficient way to **store, search, and retrieve** scholarly works.  

### **Key Features**  
- **Digital Repository:** Stores theses, capstones, and dissertations.  
- **Search and Retrieval System:** Users can search by keywords, author, title, or category.  
- **User Management:** Role-based access control for students, faculty, and administrators.  
- **Metadata Tagging:** Enhances discoverability with relevant tags and classifications.  
- **Security & Backup:** Ensures data integrity and protection.  

### **Technology Stack**  
- **Framework:** Laravel + Livewire  
- **Frontend:** TailwindCSS  
- **Database:** MySQL  
- **Methodology:** Rapid Application Development (RAD)  

### **Installation Guide**  
1. Clone the repository:  
   ```sh
   git clone knowledge-based-system
   cd digitalized-grey-literature
   ```  
2. Install dependencies:  
   ```sh
   composer install
   npm install && npm run dev
   ```  
3. Configure `.env` file:  
   ```sh
   cp .env.example .env  
   php artisan key:generate  
   ```  
4. Set up the database:  
   ```sh
   php artisan migrate --seed
   ```  
5. Run the application:  
   ```sh
   php artisan serve
   ```  

### **Usage Instructions**  
- **Admins:** Manage user roles, add/edit metadata, and approve submissions.  
- **Students & Researchers:** Upload, search, and browse research materials.  
- **Faculty:** Review and validate academic works.  

### **Contributors**  
- **Jay Millena** – Project Developer  

### **License**  
This project is for academic purposes at **Divine Word College of Legazpi**.  

### **Contact Information**  
For inquiries, contact: **jay.millena07@gmail.com**  

