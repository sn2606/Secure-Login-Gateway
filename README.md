<div id="top"></div>

[![Contributors][contributors-shield]][contributors-url]
[![Forks][forks-shield]][forks-url]
[![Stargazers][stars-shield]][stars-url]
[![Issues][issues-shield]][issues-url]



<!-- PROJECT LOGO -->
<br />
<div align="center">
  <a href="https://github.com/sn2606/Secure-Login-Gateway">
    <img src="Images/alps_favicon.png" alt="Logo" width="80" height="80">
  </a>

  <h3 align="center">Secure Login Gateway</h3>

  <p align="center">
    An SQL Injection Prevention System
    <br />
    <a href="https://github.com/sn2606/Secure-Login-Gateway/issues">Report Bug</a>
    ·
    <a href="https://github.com/sn2606/Secure-Login-Gateway/issues">Report Issue</a>
  </p>
</div>



<!-- TABLE OF CONTENTS -->
<details>
  <summary>Table of Contents</summary>
  <ol>
    <li>
      <a href="#about-the-project">About The Project</a>
      <ul>
        <li><a href="#built-with">Built With</a></li>
      </ul>
    </li>
    <li>
      <a href="#getting-started">Getting Started</a>
      <ul>
        <li><a href="#prerequisites">Prerequisites</a></li>
        <li><a href="#installation">Installation</a></li>
      </ul>
    </li>
    <!-- <li><a href="#contributing">Contributing</a></li> -->
    <li><a href="#contact">Contact</a></li>
    <!-- <li><a href="#acknowledgments">Acknowledgments</a></li> -->
  </ol>
</details>

#

<!-- ABOUT THE PROJECT -->
## About The Project

[![Product Name Screen Shot][product-screenshot]](https://github.com/sn2606/Secure-Login-Gateway)

Existing web applications vulnerabilities jeopardize the regular operation of information systems. SQL injection is the most prevalent Web system vulnerability. SQL injection is a major danger that can be used to steal sensitive information from users. OWASP classifies it as one of the most dangerous security threats. It has always been at the top of the OWASP Top 10 exploits since it is simple to implement and extremely hazardous. Even after taking proper precautions, there can still be possibilities of a back door to exploit the database information. It is a big threat to web-based applications and hackers can hack their way through to modify and delete data as per need. There are many ways to perform SQL injection and several prevention techniques as well. In this project, we are going to demonstrate the whole process from attack to its prevention.

Database Table
![Database Screenshot][db-image]

<p align="right">(<a href="#top">back to top</a>)</p>


### Built With

* HTML, CSS, JavaScript
* [Bootstrap](https://getbootstrap.com)
* [JQuery](https://jquery.com)

<p align="right">(<a href="#top">back to top</a>)</p>

#

<!-- GETTING STARTED -->
## Getting Started

To get a local copy up and running follow these simple example steps.

### Prerequisites

1. XAMPP
   * [Download](https://www.apachefriends.org/download.html)
   * [Install](https://xamppguide.com/)
2. IDE of choice - e.g. [VSCode](https://code.visualstudio.com/download)
3. Web Browser of choice - e.g. [Google Chrome](https://www.google.com/intl/en_in/chrome/)

### Installation

1. Start XAMPP and open phpMyAdmin on browser.
2. Create a new database for the project and name it "clinic_db"
3. Import the [Database](https://github.com/sn2606/Secure-Login-Gateway/blob/master/sqlinjec.sql)
4. Clone the repository in any folder and name folder as per choice.
    ```
    git clone git@github.com:sn2606/Secure-Login-Gateway.git your-folder-name
    ```
5. Start XAMPP servers - Apache and MySQL
   ![XAMPP Ready][xampp-ready]

6. Start PHP development server (at port of your choice) in Folder Directory via command line
   ```
    php -S localhost:5000
   ```
7. Navigate to http://localhost:5000
8. Admin Details:-
    - Username : admin
    - Password : admin

<p align="right">(<a href="#top">back to top</a>)</p>

#
<!-- CONTRIBUTING -->
<!-- ## Contributing

See the [open issues](https://github.com/sn2606/Secure-Login-Gateway/issues) for a full list of proposed features (and known issues).
Don't forget to give the project a star! Thanks again!

1. Fork the Project
2. Create your Feature Branch (`git checkout -b feature/AmazingFeature`)
3. Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the Branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

<p align="right">(<a href="#top">back to top</a>)</p>

# -->

<!-- CONTACT -->
## Contact

* Swaranjana Nayak - swaranjananayak@gmail.com
* Project Link: [Secure-Login-Gateway](https://github.com/sn2606/Secure-Login-Gateway)

<p align="right">(<a href="#top">back to top</a>)</p>

#

<!-- ACKNOWLEDGMENTS -->
<!-- ## Acknowledgments

1. [Dai, Xin, "Online Clinic Appointment Scheduling" (2013). Theses and Dissertations. 1467.](https://preserve.lib.lehigh.edu/islandora/object/preserve%3Abp-7256324)
2. [Clinics Management System (CMS) based on Patient Centered Process Ontology, Ruhuna Journal of Science DOI:10.4038/rjs.v1i0.72.](https://www.researchgate.net/publication/228569210_Clinics_Management_System_CMS_based_on_Patient_Centered_Process_Ontology)
3. [SRS Documentation](https://drive.google.com/file/d/1YV67uo7NL4TTZVo_CxvYwomzwMn5VZ9e/view?usp=sharing)
4. [SDS Documentation](https://drive.google.com/file/d/10Tz74ncoZZU6tJM1t2mpLfJ9ZMr7xK02/view?usp=sharing) -->

<!-- <p align="right">(<a href="#top">back to top</a>)</p> -->

<!-- MARKDOWN LINKS & IMAGES -->
<!-- https://www.markdownguide.org/basic-syntax/#reference-style-links -->
[contributors-shield]: https://img.shields.io/github/contributors/sn2606/Secure-Login-Gateway.svg?style=for-the-badge
[contributors-url]: https://github.com/sn2606/Secure-Login-Gateway/graphs/contributors
[forks-shield]: https://img.shields.io/github/forks/sn2606/Secure-Login-Gateway.svg?style=for-the-badge
[forks-url]: https://github.com/sn2606/Secure-Login-Gateway/network/members
[stars-shield]: https://img.shields.io/github/stars/sn2606/Secure-Login-Gateway.svg?style=for-the-badge
[stars-url]: https://github.com/sn2606/Secure-Login-Gateway/stargazers
[issues-shield]: https://img.shields.io/github/issues/sn2606/Secure-Login-Gateway.svg?style=for-the-badge
[issues-url]: https://github.com/sn2606/Secure-Login-Gateway/issues
[product-screenshot]: Images/login.png
[xampp-ready]: Images/xampp.png
[db-image]: Images/users_table.png