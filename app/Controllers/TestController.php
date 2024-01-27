<?php
namespace App\Controllers;

use App\View;

class TestController{


    public function body(){
        
        return View::present('app.body',[]);
    }

    public function index(){
        
        return View::present('app.test',[]);
    }


    public function sample(){
        return '{
            "results": [
              {
                "createdAt": "2024-01-24T05:32:14.627Z",
                "name": "Jermaine Connelly",
                "avatar": "https://cloudflare-ipfs.com/ipfs/Qmd3W5DuhgHirLHGVixi6V76LhCkZUz6pnFt5AJBiyvHye/avatar/272.jpg",
                "email": "Emma_Waelchi16@yahoo.com",
                "id": "1"
              },
              {
                "createdAt": "2024-01-24T09:30:30.215Z",
                "name": "Edward Waelchi",
                "avatar": "https://cloudflare-ipfs.com/ipfs/Qmd3W5DuhgHirLHGVixi6V76LhCkZUz6pnFt5AJBiyvHye/avatar/850.jpg",
                "email": "Aryanna_Tillman@hotmail.com",
                "id": "2"
              },
              {
                "createdAt": "2024-01-23T17:53:25.721Z",
                "name": "Ebony Bins",
                "avatar": "https://cloudflare-ipfs.com/ipfs/Qmd3W5DuhgHirLHGVixi6V76LhCkZUz6pnFt5AJBiyvHye/avatar/1088.jpg",
                "email": "Garrett_Conroy11@hotmail.com",
                "id": "3"
              },
              {
                "createdAt": "2024-01-24T11:34:14.313Z",
                "name": "Ramiro Ruecker",
                "avatar": "https://cloudflare-ipfs.com/ipfs/Qmd3W5DuhgHirLHGVixi6V76LhCkZUz6pnFt5AJBiyvHye/avatar/1.jpg",
                "email": "Dan.Wilkinson32@yahoo.com",
                "id": "4"
              },
              {
                "createdAt": "2024-01-23T22:48:39.918Z",
                "name": "Julian King",
                "avatar": "https://cloudflare-ipfs.com/ipfs/Qmd3W5DuhgHirLHGVixi6V76LhCkZUz6pnFt5AJBiyvHye/avatar/181.jpg",
                "email": "Tatum77@yahoo.com",
                "id": "5"
              },
              {
                "createdAt": "2024-01-23T20:16:43.455Z",
                "name": "Teri Okuneva DVM",
                "avatar": "https://cloudflare-ipfs.com/ipfs/Qmd3W5DuhgHirLHGVixi6V76LhCkZUz6pnFt5AJBiyvHye/avatar/190.jpg",
                "email": "Lina.Klein99@gmail.com",
                "id": "6"
              },
              {
                "createdAt": "2024-01-24T04:27:06.573Z",
                "name": "Mike Gerhold",
                "avatar": "https://cloudflare-ipfs.com/ipfs/Qmd3W5DuhgHirLHGVixi6V76LhCkZUz6pnFt5AJBiyvHye/avatar/416.jpg",
                "email": "Salvador.Dietrich@hotmail.com",
                "id": "7"
              },
              {
                "createdAt": "2024-01-24T06:41:21.665Z",
                "name": "Theresa Lubowitz",
                "avatar": "https://cloudflare-ipfs.com/ipfs/Qmd3W5DuhgHirLHGVixi6V76LhCkZUz6pnFt5AJBiyvHye/avatar/591.jpg",
                "email": "Emmalee47@yahoo.com",
                "id": "8"
              },
              {
                "createdAt": "2024-01-24T07:34:04.632Z",
                "name": "Rosemarie Grady",
                "avatar": "https://cloudflare-ipfs.com/ipfs/Qmd3W5DuhgHirLHGVixi6V76LhCkZUz6pnFt5AJBiyvHye/avatar/509.jpg",
                "email": "Afton.Jacobi@yahoo.com",
                "id": "9"
              },
              {
                "createdAt": "2024-01-24T11:01:04.106Z",
                "name": "Stacey Schultz",
                "avatar": "https://cloudflare-ipfs.com/ipfs/Qmd3W5DuhgHirLHGVixi6V76LhCkZUz6pnFt5AJBiyvHye/avatar/90.jpg",
                "email": "Elody.Upton70@yahoo.com",
                "id": "10"
              },
              {
                "createdAt": "2024-01-23T18:05:28.878Z",
                "name": "Kristopher Pagac",
                "avatar": "https://cloudflare-ipfs.com/ipfs/Qmd3W5DuhgHirLHGVixi6V76LhCkZUz6pnFt5AJBiyvHye/avatar/520.jpg",
                "email": "Leonor_Pfannerstill@yahoo.com",
                "id": "11"
              },
              {
                "createdAt": "2024-01-24T06:15:27.615Z",
                "name": "Forrest Bauch",
                "avatar": "https://cloudflare-ipfs.com/ipfs/Qmd3W5DuhgHirLHGVixi6V76LhCkZUz6pnFt5AJBiyvHye/avatar/395.jpg",
                "email": "Vidal_Schulist@yahoo.com",
                "id": "12"
              },
              {
                "createdAt": "2024-01-24T02:53:58.921Z",
                "name": "Elbert Kerluke",
                "avatar": "https://cloudflare-ipfs.com/ipfs/Qmd3W5DuhgHirLHGVixi6V76LhCkZUz6pnFt5AJBiyvHye/avatar/182.jpg",
                "email": "Kelton_Homenick@yahoo.com",
                "id": "13"
              },
              {
                "createdAt": "2024-01-23T17:32:21.331Z",
                "name": "Rosa Langosh",
                "avatar": "https://cloudflare-ipfs.com/ipfs/Qmd3W5DuhgHirLHGVixi6V76LhCkZUz6pnFt5AJBiyvHye/avatar/42.jpg",
                "email": "Aryanna_Stehr@gmail.com",
                "id": "14"
              },
              {
                "createdAt": "2024-01-24T10:08:42.608Z",
                "name": "Mr. Cristina McGlynn III",
                "avatar": "https://cloudflare-ipfs.com/ipfs/Qmd3W5DuhgHirLHGVixi6V76LhCkZUz6pnFt5AJBiyvHye/avatar/188.jpg",
                "email": "Colleen87@hotmail.com",
                "id": "15"
              },
              {
                "createdAt": "2024-01-23T15:14:56.132Z",
                "name": "Henry Braun",
                "avatar": "https://cloudflare-ipfs.com/ipfs/Qmd3W5DuhgHirLHGVixi6V76LhCkZUz6pnFt5AJBiyvHye/avatar/1156.jpg",
                "email": "Aaliyah_OKeefe0@gmail.com",
                "id": "16"
              },
              {
                "createdAt": "2024-01-23T20:23:16.636Z",
                "name": "Teresa Kihn",
                "avatar": "https://cloudflare-ipfs.com/ipfs/Qmd3W5DuhgHirLHGVixi6V76LhCkZUz6pnFt5AJBiyvHye/avatar/332.jpg",
                "email": "Earline79@hotmail.com",
                "id": "17"
              },
              {
                "createdAt": "2024-01-24T13:51:26.634Z",
                "name": "Carol Purdy IV",
                "avatar": "https://cloudflare-ipfs.com/ipfs/Qmd3W5DuhgHirLHGVixi6V76LhCkZUz6pnFt5AJBiyvHye/avatar/460.jpg",
                "email": "Margaretta.Lemke20@hotmail.com",
                "id": "18"
              },
              {
                "createdAt": "2024-01-23T20:56:13.324Z",
                "name": "Preston Botsford",
                "avatar": "https://cloudflare-ipfs.com/ipfs/Qmd3W5DuhgHirLHGVixi6V76LhCkZUz6pnFt5AJBiyvHye/avatar/166.jpg",
                "email": "Kristoffer94@yahoo.com",
                "id": "19"
              },
              {
                "createdAt": "2024-01-23T16:51:21.906Z",
                "name": "Maryann Hills",
                "avatar": "https://cloudflare-ipfs.com/ipfs/Qmd3W5DuhgHirLHGVixi6V76LhCkZUz6pnFt5AJBiyvHye/avatar/608.jpg",
                "email": "Graciela_Gutmann95@yahoo.com",
                "id": "20"
              },
              {
                "createdAt": "2024-01-23T15:00:04.882Z",
                "name": "Stephen Schultz",
                "avatar": "https://cloudflare-ipfs.com/ipfs/Qmd3W5DuhgHirLHGVixi6V76LhCkZUz6pnFt5AJBiyvHye/avatar/673.jpg",
                "email": "Brielle_Russel89@yahoo.com",
                "id": "21"
              },
              {
                "createdAt": "2024-01-24T11:33:02.030Z",
                "name": "Raul McDermott",
                "avatar": "https://cloudflare-ipfs.com/ipfs/Qmd3W5DuhgHirLHGVixi6V76LhCkZUz6pnFt5AJBiyvHye/avatar/1202.jpg",
                "email": "Nora.Mills66@gmail.com",
                "id": "22"
              },
              {
                "createdAt": "2024-01-24T02:32:21.427Z",
                "name": "Jesse Jones II",
                "avatar": "https://cloudflare-ipfs.com/ipfs/Qmd3W5DuhgHirLHGVixi6V76LhCkZUz6pnFt5AJBiyvHye/avatar/757.jpg",
                "email": "Kristian_Wisozk26@hotmail.com",
                "id": "23"
              },
              {
                "createdAt": "2024-01-24T03:25:05.425Z",
                "name": "Bobbie Gislason",
                "avatar": "https://cloudflare-ipfs.com/ipfs/Qmd3W5DuhgHirLHGVixi6V76LhCkZUz6pnFt5AJBiyvHye/avatar/1140.jpg",
                "email": "Rowan_Hyatt10@hotmail.com",
                "id": "24"
              },
              {
                "createdAt": "2024-01-24T05:01:05.440Z",
                "name": "Ms. Casey Sawayn",
                "avatar": "https://cloudflare-ipfs.com/ipfs/Qmd3W5DuhgHirLHGVixi6V76LhCkZUz6pnFt5AJBiyvHye/avatar/314.jpg",
                "email": "Jamil2@gmail.com",
                "id": "25"
              },
              {
                "createdAt": "2024-01-24T11:36:26.441Z",
                "name": "Kayla Witting",
                "avatar": "https://cloudflare-ipfs.com/ipfs/Qmd3W5DuhgHirLHGVixi6V76LhCkZUz6pnFt5AJBiyvHye/avatar/1113.jpg",
                "email": "Thelma.Pouros48@hotmail.com",
                "id": "26"
              },
              {
                "createdAt": "2024-01-24T11:05:41.669Z",
                "name": "Tracy Okuneva",
                "avatar": "https://cloudflare-ipfs.com/ipfs/Qmd3W5DuhgHirLHGVixi6V76LhCkZUz6pnFt5AJBiyvHye/avatar/574.jpg",
                "email": "Karley87@gmail.com",
                "id": "27"
              },
              {
                "createdAt": "2024-01-23T18:27:06.424Z",
                "name": "Ms. Mae Haley",
                "avatar": "https://cloudflare-ipfs.com/ipfs/Qmd3W5DuhgHirLHGVixi6V76LhCkZUz6pnFt5AJBiyvHye/avatar/956.jpg",
                "email": "Chris.Altenwerth86@yahoo.com",
                "id": "28"
              },
              {
                "createdAt": "2024-01-23T17:32:47.087Z",
                "name": "Krista Skiles",
                "avatar": "https://cloudflare-ipfs.com/ipfs/Qmd3W5DuhgHirLHGVixi6V76LhCkZUz6pnFt5AJBiyvHye/avatar/169.jpg",
                "email": "Jamir.Smith51@yahoo.com",
                "id": "29"
              },
              {
                "createdAt": "2024-01-24T00:36:05.281Z",
                "name": "Kristi Heidenreich",
                "avatar": "https://cloudflare-ipfs.com/ipfs/Qmd3W5DuhgHirLHGVixi6V76LhCkZUz6pnFt5AJBiyvHye/avatar/516.jpg",
                "email": "Gertrude_Cassin@hotmail.com",
                "id": "30"
              },
              {
                "createdAt": "2024-01-23T16:48:56.958Z",
                "name": "Ms. Lorene Waelchi",
                "avatar": "https://cloudflare-ipfs.com/ipfs/Qmd3W5DuhgHirLHGVixi6V76LhCkZUz6pnFt5AJBiyvHye/avatar/836.jpg",
                "email": "Cheyanne_Jones91@gmail.com",
                "id": "31"
              },
              {
                "createdAt": "2024-01-23T19:53:05.216Z",
                "name": "Lucille Macejkovic",
                "avatar": "https://cloudflare-ipfs.com/ipfs/Qmd3W5DuhgHirLHGVixi6V76LhCkZUz6pnFt5AJBiyvHye/avatar/606.jpg",
                "email": "Keely.Schumm24@hotmail.com",
                "id": "32"
              },
              {
                "createdAt": "2024-01-24T04:56:59.486Z",
                "name": "Tina Marks",
                "avatar": "https://cloudflare-ipfs.com/ipfs/Qmd3W5DuhgHirLHGVixi6V76LhCkZUz6pnFt5AJBiyvHye/avatar/858.jpg",
                "email": "Veronica74@hotmail.com",
                "id": "33"
              }
            ]
          }';
    }
}