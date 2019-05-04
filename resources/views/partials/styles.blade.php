 <!-- Styles -->
<style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

    /*Custom css style properties starts from here */
        input[type=text], input[type=password], input[type=email] {
            width: 90%;
            padding: 12px 20px;
            margin: 8px 26px;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
            font-size:16px;
        }
        .navbar-collapse{
            max-height:auto;
        }
        /* Set a style for all buttons */
        button {
            background-color: white;
            font-family: Raleway;
            color: #676768;
            padding: 10px 10px;
            margin: 8px 26px;
            border: none;
            cursor: pointer;
            font-size:18px;
        }
        button:hover {
            opacity: 0.8;
        }

        /* Center the image and position the close button */
        .imgcontainer {
            text-align: center;
            margin: 24px 0 12px 0;
            position: relative;
        }
        .avatar {
            width: 200px;
            height:200px;
            border-radius: 50%;
        }

        /* The Modal (background) */
        .modal {
            display:none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0,0,0,0.4);
        }

        /* Modal Content Box */
        .modal-content {
            background-color: #fefefe;
            margin: 4% auto 15% auto;
            border: 1px solid #888;
            width: 40%; 
            padding-bottom: 30px;
        }

        /* The Close Button (x) */
        .close {
            position: absolute;
            right: 25px;
            top: 0;
            color: #000;
            font-size: 35px;
            font-weight: bold;
        }
        .close:hover,.close:focus {
            color: red;
            cursor: pointer;
        }

        /* Add Zoom Animation */
        .animate {
            animation: zoom 0.6s
        }
         .ml5 {
          position: relative;
          font-weight: 300;
          font-size: 3.2em;
          color: #402d2d;
        }

        .ml5 .text-wrapper {
          position: relative;
          display: inline-block;
          padding-top: 0.1em;
          padding-right: 0.05em;
          padding-bottom: 0.15em;
          line-height: 1em;
        }

        .ml5 .line {
          position: absolute;
          left: 0;
          top: 0;
          bottom: 0;
          margin: auto;
          height: 3px;
          width: 100%;
          background-color: #402d2d;
          transform-origin: 0.5 0;
        }

        .ml5 .ampersand {
          font-family: Baskerville, "EB Garamond", serif;
          font-style: italic;
          font-weight: 400;
          width: 1em;
          margin-right: -0.1em;
          margin-left: -0.1em;
        }

        .ml5 .letters {
          display: inline-block;
          opacity: 0;
        }

        .ml52 {
          position: relative;
          font-weight: 300;
          font-size: 3.2em;
          color: #402d2d;
        }

        .ml52 .text-wrapper {
          position: relative;
          display: inline-block;
          padding-top: 0.1em;
          padding-right: 0.05em;
          padding-bottom: 0.15em;
          line-height: 1em;
        }

        .ml52 .line2 {
          position: absolute;
          left: 0;
          top: 0;
          bottom: 0;
          margin: auto;
          height: 3px;
          width: 100%;
          background-color: #402d2d;
          transform-origin: 0.5 0;
        }

        .ml52 .ampersand2 {
          font-family: Baskerville, "EB Garamond", serif;
          font-style: italic;
          font-weight: 400;
          width: 1em;
          margin-right: -0.1em;
          margin-left: -0.1em;
        }

        .ml52 .letters2 {
          display: inline-block;
          opacity: 0;
        }
</style>