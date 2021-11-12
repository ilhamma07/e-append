<!DOCTYPE html>
<!-- Created by pdf2htmlEX (https://github.com/coolwanglu/pdf2htmlex) -->
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="generator" content="pdf2htmlEX" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <style type="text/css">
        /*! 
 * Base CSS for pdf2htmlEX
 * Copyright 2012,2013 Lu Wang <coolwanglu@gmail.com> 
 * https://github.com/coolwanglu/pdf2htmlEX/blob/master/share/LICENSE
 */
        #sidebar {
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            width: 250px;
            padding: 0;
            margin: 0;
            overflow: auto
        }

        #page-container {
            position: absolute;
            top: 0;
            left: 0;
            margin: 0;
            padding: 0;
            border: 0
        }

        @media screen {
            #sidebar.opened+#page-container {
                left: 250px
            }

            #page-container {
                bottom: 0;
                right: 0;
                overflow: auto
            }

            .loading-indicator {
                display: none
            }

            .loading-indicator.active {
                display: block;
                position: absolute;
                width: 64px;
                height: 64px;
                top: 50%;
                left: 50%;
                margin-top: -32px;
                margin-left: -32px
            }

            .loading-indicator img {
                position: absolute;
                top: 0;
                left: 0;
                bottom: 0;
                right: 0
            }
        }

        @media print {
            @page {
                margin: 0
            }

            html {
                margin: 0
            }

            body {
                margin: 0;
                -webkit-print-color-adjust: exact
            }

            #sidebar {
                display: none
            }

            #page-container {
                width: auto;
                height: auto;
                overflow: visible;
                background-color: transparent
            }

            .d {
                display: none
            }
        }

        .pf {
            position: relative;
            background-color: white;
            overflow: hidden;
            margin: 0;
            border: 0
        }

        .pc {
            position: absolute;
            border: 0;
            padding: 0;
            margin: 0;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            display: block;
            transform-origin: 0 0;
            -ms-transform-origin: 0 0;
            -webkit-transform-origin: 0 0
        }

        .pc.opened {
            display: block
        }

        .bf {
            position: absolute;
            border: 0;
            margin: 0;
            top: 0;
            bottom: 0;
            width: 100%;
            height: 100%;
            -ms-user-select: none;
            -moz-user-select: none;
            -webkit-user-select: none;
            user-select: none
        }

        .bi {
            position: absolute;
            border: 0;
            margin: 0;
            -ms-user-select: none;
            -moz-user-select: none;
            -webkit-user-select: none;
            user-select: none
        }

        @media print {
            .pf {
                margin: 0;
                box-shadow: none;
                page-break-after: always;
                page-break-inside: avoid
            }

            @-moz-document url-prefix() {
                .pf {
                    overflow: visible;
                    border: 1px solid #fff
                }

                .pc {
                    overflow: visible
                }
            }
        }

        .c {
            position: absolute;
            border: 0;
            padding: 0;
            margin: 0;
            overflow: hidden;
            display: block
        }

        .t {
            position: absolute;
            white-space: pre;
            font-size: 1px;
            transform-origin: 0 100%;
            -ms-transform-origin: 0 100%;
            -webkit-transform-origin: 0 100%;
            unicode-bidi: bidi-override;
            -moz-font-feature-settings: "liga"0
        }

        .t:after {
            content: ''
        }

        .t:before {
            content: '';
            display: inline-block
        }

        .t span {
            position: relative;
            unicode-bidi: bidi-override
        }

        ._ {
            display: inline-block;
            color: transparent;
            z-index: -1
        }

        ::selection {
            background: rgba(127, 255, 255, 0.4)
        }

        ::-moz-selection {
            background: rgba(127, 255, 255, 0.4)
        }

        .pi {
            display: none
        }

        .d {
            position: absolute;
            transform-origin: 0 100%;
            -ms-transform-origin: 0 100%;
            -webkit-transform-origin: 0 100%
        }

        .it {
            border: 0;
            background-color: rgba(255, 255, 255, 0.0)
        }

        .ir:hover {
            cursor: pointer
        }
    </style>
    <style type="text/css">
        /*! 
 * Fancy styles for pdf2htmlEX
 * Copyright 2012,2013 Lu Wang <coolwanglu@gmail.com> 
 * https://github.com/coolwanglu/pdf2htmlEX/blob/master/share/LICENSE
 */
        @keyframes fadein {
            from {
                opacity: 0
            }

            to {
                opacity: 1
            }
        }

        @-webkit-keyframes fadein {
            from {
                opacity: 0
            }

            to {
                opacity: 1
            }
        }



        @media screen {
            #sidebar {
                background-color: #2f3236;
                background-image: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI0IiBoZWlnaHQ9IjQiPgo8cmVjdCB3aWR0aD0iNCIgaGVpZ2h0PSI0IiBmaWxsPSIjNDAzYzNmIj48L3JlY3Q+CjxwYXRoIGQ9Ik0wIDBMNCA0Wk00IDBMMCA0WiIgc3Ryb2tlLXdpZHRoPSIxIiBzdHJva2U9IiMxZTI5MmQiPjwvcGF0aD4KPC9zdmc+")
            }

            #outline {
                font-family: Georgia, Times, "Times New Roman", serif;
                font-size: 13px;
                margin: 2em 1em
            }

            #outline ul {
                padding: 0
            }

            #outline li {
                list-style-type: none;
                margin: 1em 0
            }

            #outline li>ul {
                margin-left: 1em
            }

            #outline a,
            #outline a:visited,
            #outline a:hover,
            #outline a:active {
                line-height: 1.2;
                color: #e8e8e8;
                text-overflow: ellipsis;
                white-space: nowrap;
                text-decoration: none;
                display: block;
                overflow: hidden;
                outline: 0
            }

            #outline a:hover {
                color: #0cf
            }

            #page-container {
                background-color: #9e9e9e;
                background-image: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI1IiBoZWlnaHQ9IjUiPgo8cmVjdCB3aWR0aD0iNSIgaGVpZ2h0PSI1IiBmaWxsPSIjOWU5ZTllIj48L3JlY3Q+CjxwYXRoIGQ9Ik0wIDVMNSAwWk02IDRMNCA2Wk0tMSAxTDEgLTFaIiBzdHJva2U9IiM4ODgiIHN0cm9rZS13aWR0aD0iMSI+PC9wYXRoPgo8L3N2Zz4=");
                -webkit-transition: left 500ms;
                transition: left 500ms
            }

            .pf {
                margin: 13px auto;
                box-shadow: 1px 1px 3px 1px #333;
                border-collapse: separate
            }

            .pc.opened {
                -webkit-animation: fadein 100ms;
                animation: fadein 100ms
            }

            .loading-indicator.active {
                -webkit-animation: swing 1.5s ease-in-out .01s infinite alternate none;
                animation: swing 1.5s ease-in-out .01s infinite alternate none
            }

            .checked {
                background: no-repeat url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABYAAAAWCAYAAADEtGw7AAAABmJLR0QA/wD/AP+gvaeTAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH3goQDSYgDiGofgAAAslJREFUOMvtlM9LFGEYx7/vvOPM6ywuuyPFihWFBUsdNnA6KLIh+QPx4KWExULdHQ/9A9EfUodYmATDYg/iRewQzklFWxcEBcGgEplDkDtI6sw4PzrIbrOuedBb9MALD7zv+3m+z4/3Bf7bZS2bzQIAcrmcMDExcTeXy10DAFVVAQDksgFUVZ1ljD3yfd+0LOuFpmnvVVW9GHhkZAQcxwkNDQ2FSCQyRMgJxnVdy7KstKZpn7nwha6urqqfTqfPBAJAuVymlNLXoigOhfd5nmeiKL5TVTV+lmIKwAOA7u5u6Lped2BsbOwjY6yf4zgQQkAIAcedaPR9H67r3uYBQFEUFItFtLe332lpaVkUBOHK3t5eRtf1DwAwODiIubk5DA8PM8bYW1EU+wEgCIJqsCAIQAiB7/u253k2BQDDMJBKpa4mEon5eDx+UxAESJL0uK2t7XosFlvSdf0QAEmlUnlRFJ9Waho2Qghc1/U9z3uWz+eX+Wr+lL6SZfleEAQIggA8z6OpqSknimIvYyybSCReMsZ6TislhCAIAti2Dc/zejVNWwCAavN8339j27YbTg0AGGM3WltbP4WhlRWq6Q/btrs1TVsYHx+vNgqKoqBUKn2NRqPFxsbGJzzP05puUlpt0ukyOI6z7zjOwNTU1OLo6CgmJyf/gA3DgKIoWF1d/cIY24/FYgOU0pp0z/Ityzo8Pj5OTk9PbwHA+vp6zWghDC+VSiuRSOQgGo32UErJ38CO42wdHR09LBQK3zKZDDY2NupmFmF4R0cHVlZWlmRZ/iVJUn9FeWWcCCE4ODjYtG27Z2Zm5juAOmgdGAB2d3cBADs7O8uSJN2SZfl+WKlpmpumaT6Yn58vn/fs6XmbhmHMNjc3tzDGFI7jYJrm5vb29sDa2trPC/9aiqJUy5pOp4f6+vqeJ5PJBAB0dnZe/t8NBajx/z37Df5OGX8d13xzAAAAAElFTkSuQmCC)
            }
        }
    </style>
    <style type="text/css">
        .ff0 {
            font-family: sans-serif;
            visibility: hidden;
        }

        @font-face {
            font-family: ff1;
            src: url('data:application/font-woff;base64,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')format("woff");
        }

        .ff1 {
            font-family: ff1;
            line-height: 0.857910;
            font-style: normal;
            font-weight: normal;
            visibility: visible;
        }

        @font-face {
            font-family: ff2;
            src: url('data:application/font-woff;base64,d09GRgABAAAAAEJEAA8AAAAAfSQABQA+AAAAAAAAAAAAAAAAAAAAAAAAAABGRlRNAAABWAAAABwAAAAcaYTiSEdERUYAAAF0AAAAHAAAAB4AJwA9T1MvMgAAAZAAAABeAAAAYPdF1wtjbWFwAAAB8AAAAOYAAAHCFzeXhWN2dCAAAALYAAACSwAABSCw38njZnBnbQAABSQAAAUOAAAJGvb2TQxnbHlmAAAKNAAAIs4AADcAF8JPR2hlYWQAAC0EAAAAMwAAADYdyORWaGhlYQAALTgAAAAgAAAAJAx1BelobXR4AAAtWAAAAMIAAADaxu4Uf2xvY2EAAC4cAAAAcAAAAHBDl1JkbWF4cAAALowAAAAgAAAAIBJGAlxuYW1lAAAurAAABfsAAA4NX0MRk3Bvc3QAADSoAAAAgAAAAKM905qxcHJlcAAANSgAAA0cAAAkEGuvAv4AAAABAAAAANGrZ0MAAAAAu+t8zAAAAADb7f44eJxjYGRgYOABYjEgZmJgBEIzIGYB8xgABfAAZXicY2BmPs44gYGVgYN1JqsxAwOjHIRmvsDQxsTAwcDEz8rExMTCzMTykIHpvwPDmv8MDAycQMzgG6ygAKQUFNRY9/2bzMDAuo8xV4GBcT5Ijnk7Kx9IjoERANIeDxIAAHicnY/NLkMBEIW/W1dLUfX/V1xUW1RbNCF2hIVERESi2y7EViQi3qbPUWUpSGrVhqXEgxzDdS1sNE4yc2Ym3yQzQBt+JHD4VM0656t3qZgn8axyLRcossEm2+yyzyHHlDjlnEuuuPZSktEeWVZZN2qLHfY44IgTypxxEVB616te1FRDz6rrSY960L3udKuablR9i31f8qecMD+oE7IU+g34rwVy28ORDjqjXdDdQ8wf9sbp6zcfGBwaZmR0jPGJBExOBUvT3szsHMn5VDqzsLiUXSaXL6zYj2ut3diyiv9b+wDGKTNEAAB4nK2USU8UURSFP1obEiOI8gf8FW6NiT9At86KwRFEERoQUGkVQVG0BQewwanbERAUEAcUFcco4oKFWzcuJDHuSKjyvFc9lB1hZd3Ue+ecd1+l7rmvCnKi4ETwX6vYSRmHFMdoJsII39hCWOgiXcS4RS8veMck//FyqoLFLJw3SDYF4E67P52Y7qFgnk+JiBXMX5pW3Hx3KkObciJuvjOUvYQFdm9uYELq76wZdzqw3HB3meGBBuFFdsevnKjT48QzPFjNGtayjvVsYrPq38p2dsiZXeymmBLLSrS2TWOR2EZlFSrL4HTWHkp172M/5VQoSoXLEsys7bW8nJCikiqqOUANtYkxZJUarVRbXqm7joPqzGHqLUrOnhLmCEfVtQaO0zgna0yhJk5wUn0+xelZcfNfrEVxhrM6D+dopY0LOhftdGSo561+iSidOjNmrVVKp0Vm9QljPKSbHgasl4VyzXMk6UuR9bBUHtSowrDvjT3/Qim36lS7qa0pUWml9HrfjoqEjyYzrEzvKV4fzFNqM5xoUQ0eTlfksVZbf1r1uzKXmvSjw+dMu2UGZaqz4TYu6wu8otG4atBVYQ91WuzXo6ncLsuvcZ0b6kXcouTsKTHhODf1bd/mDncVaexH3tzNPdu5Xu7TRz8P1MkBBhmy+lxr/9L7E3pfSnnEMI91Qp7xXH+aUUVSeSptJKG+sprHR3kpbrI8NsYb/aHe84GPfOa12Cc7vhUbZ4KvTGblCn3hh8YZxoPfyWMFBIflcwcbFCuDi/8ASKJu7QB4nH1VTW/bRhBdUpIlSxbKBGlggIcsu6FgQ1JcNGnruq7DSqQsRUlrWTKwdNKWtKRAvuUUtEEL6OaAaX9Hr6P0It9SoNf8hxx6bI45uzNLUrCNtMRS3HnzsW9nZlfO7uiH77979PDQlweD/n5v79tvHtzv3uu0d1ue22x87dzd+Wr7y60vNj//7NONW/XaWsW+KT66sXrtivFBuVRcLuSXctmMrrGaJ1oBh0oA2Ypot+skixCB8BwQAEeoddEGeKDM+EVLBy0fX7J0YktnYakZfJtt12vcExxeu4LPtcOexPlvrvA5vFXzB2qerSihjIJloQf3VicuBy3gHrSeTiIvcDHerFRsiua4WK+xWbGE0xLOYE08mWlrO5qa6Gve1kxnhTItCxnbC0ew15Oea1qWrzDWVLFgqQl5FYsfE2f2gs9qr6Jf5wY7CqorIzEKH0nIhOgUZbwoOoErVVgXLqw/+3sVtzyGmnA9qAoM1t1fLKBBzjYEj94xJC/e/nMRCRNkyTbeMZrSFhdpQn06Z8gNGeL+LIu4vJg77AgFmPZkLHN2ZL5kzkbVBz0gzatU8+EBaaapZuEeCItK5QXJeDpZhekRr9cw+2rYOFDPIVMJjoYT+objSLhunLeBBMfFiRMme/VmH2+gfRjgJo4pDT0JG+IJXBON2AABTjU47kvlkrjBtSawYJh4wYbnEi/uRYEbE6RYoidP2e2zN7M73PzjNrvDfOIB15tYlIoXydFjuBGYI+zPx1yaFjg+ps8XcuxTlYQB629wOUutqLxwb5esU2Paed4ucKmbGZ+qhQBv4Y9obKPCwHIpkSra2OZSM1lqhqskFjS7EAeFjN1skypDrs22aflW/PwPJTPhlLOhcC6WgcCCU7zOf1KLrYnQOvfG7jmCF4LmEoJJtPfz1CkXycLoUaBytlNVxsaTi5iOYRREVVzlwPa4FGPhC+whZ0/S3ijXqr7dvuj2DqWqdtIlgwtSrN+MJWAWqlNBb2IPtqpmWlYl7yp5IbYvqTupmkcF0e1HFFwkARnHE4SbXqp0whebV+/g0Wzh7SZaoeAGb0Xh/Gx6FM0cJ3riBZMtiiE6o0j05bapuO7LX8xntNRV1tW6g0a9hndPYya0572Zoz3vH8pTgzH+fCBf6preDBr+7Cbq5ClnzFGoTiiBJHASKNI+CgVlb546jE2VNqsAJQ/nGlNYIcU0NpzrMWakmI5YNsYchdGDRVqdYIrxuvX4iMrzsz+JAp8OF7uOpcShgSZ2GOhiZ6bpSytQFOMGlESD8LuE343xJcLz2BjadQ2TQ3dSFAi8p7ChJDO1uBUzFJLPz84G0nptvvUtbLVH+B5KWK7i3Z+z76HdLr0BwrswHYbEgx1I8s3bnaGPbZsGRJMOLGOE5SQCWrSUD7UjOg2xNlhA5T9FAaY++FVaVB77qp0NYG2xhWWPY+YqtNCGH10Vn6iziUehaJ/QZxm5sb6MERNFXMyPk5RfQeZDgaphwDHbWTbsY6vHd2nRjJExXonZyli9RTNRMtpWxi6Vi7B8CwPioHnpFh3JnJ33/Zi8kk4SA1zbgBIyqpxLZeKA2UFVh7jgOEGqZPonhenN2b74EW8WIq0i5VENZbsT4uUf+5cQEZupc4HuiFIS468YzdPOVzDvGXswP/td/GSde+o1QX8O1JjMPMXGZn50GYCH1XqtcBktKziKCuX3O8T5KpQXXwK5h/8a/wKCNoKCAAB4nJV7B3Qb15nuvVMwmEGbwaD3XggCIAGwgA3D3kWRFNUsSlaxHbmo2pZtKY5iy3nrdbyObaXI3tS3cZxmWc2CpGyi7FHW2X1HXr+s4t1kYz/7vOxacR6zTjnuAN+9MwOQKn6bRx7i3hnMgPN/f/n+/78XgAADABDb6DlAAgZkjkGQ7TrOUH+1kDumoX/VdZwk0BQcI/FpGp8+zmge+6jrOMTn80JQiAaF4AARqEbgl6qfoOc++O4AdREAAEFD9TW4F7wO3IA7rrN7AH/pYnNT1GIkTNBIhkMZok1sKfQQ+ZyPgHs1RrvwMG0QnaJg5yD1kM4RcTkjdt1j/kIm7XyJ4bQkyei1UDzoDvAaDR8A8v8YhCeJDNENTMB4EjC6BQpkF2AW/R9o0YSDoVhLoTUfRP+AyJiF6kYz+oHf0BpYGr4f9/ljMZ9GcMmf88XFd+Ed6Fl1wH4MaMqL51/Qw0kNS06A0kWYTf0YP7gmrHxezgbvyHZ3ZfDfHcPZzCD6w58Bq2+SHP1DYAXaYzwNstnmJrsqKOwhsZjMs5TB4rU6g2ZKQ8xTBtFndQbMFP17g0lLMQbRoNlvMLFITosBEGBkcYF8kQ4CEaTAW5IzYYZJAcYMMKaHMS2MMrCBhEkCptHTSlETMXljGlocPJy08Cb0YjOgFw5JYQno0IsDz84RaSRtYPHyCXRZoLz49gmTPL51wiCP75zQy+NlLH0kAANlIi2xXAA0AQmQHLpBYtEdWW6KI0B58WX5iOPR/wb4ITg84QCXbnSXIXfcNBtFwzF6NSgtlBYEMywWs9lUKjWfmuffmE/hH/4NeUg1N6GT6g9EFoJBq9kGU8hQ4ZCRsFp86LiHIl/M3vH8p+/71s2pptufP7gfjc8b3amuyaa5W7ttvt6bRtrnuhMOlvjLz79zbPOab7/7tcPvyuP3Nj9191ybc+Vnf3D74//jYEekf+Oeh2Td7wGA/GuEcw84LBmSrTDlg0kvjPmghIWyY2QlaMPI2ni9AU7YMKA2BM0L+Sj6BcWyAmjxLPEpoFs8j0HUlRdfl3QIHZ3QXgwEigiQzAt5myYzyxfLMHFMswqBkiuZi8UFoZhFAzKy1BupixgiGRSMCJiHCA/sMciUFUDaxB6ypZAhMCAqSBoMklV2K2zpSBTWxFZajFYTQ3Im/YdrthfNnpaVhe7No816RsdQBK11dK67rXPjo/MZ2/Bndl4k8lqTjh4ze0SW4X02i89uN0BuwxP3bEmlJjtCoURIa/ZZTTbeaI2EHS0b7hvs2f/Y0T2vsGY3xu8WZKdPIPzWQvoMWI8g82DI1sNmLQKlGRtjs4xbM8atuUy0SNyK2diKFQ4RTiKIL0sxdEksgF4kdDYmkUY3vtON73TLd7rxne7y4nsn5JFInwJaNENGd/kktjkjQhubslE1aSNWnIjUYOyU0GGnhD8k2wkFdB6/L8jWik92Cp2CrbUMdRI3Otv4x0CAHp21oUPVas3F7EKRRyqSLRfZLFZT6hJWFf4x29F5fEYwFxVTxmpTDVgjxwrZZgmsshRUddgJ1TPXUyJj9ZHkEz13fue23t1rO0xaDWk0sC2zOwf6tg2EUrP3Tu5HumI0OiO7u2/7aNxVmG7p2DyR45BiSUKjFTvmdkrr/+KGdKBnfWf/zpVpuGfdYze3Wb1+oxFFnognEA2EeuZybWulEMO7rKLTxISkdW2J0VZ/OBGmTW6byS4YRaTnzKq7hru3Txd1BNOy8jYUj5oWPyD/mbaABpABH0od0QyMpWG8EUbiMBKDUQ+MuWHYBSNOGHXAqB3GbDBmhTELjPEQqThCwwgFU27YhNE3YxtpgmmbA01sAexcqhLxeBrpzubJZPjy4keSF13BY/fjsUXwPIpVPA5sPI9sgD9HCCAOqMVLJ9BlFApK2P0o7H4cepuimrJxd0ZWMJUK8jwXnOHmQAlr1lzML+RyOC5hFebVUJQT8hflcckDr/pB1JKCQi1KCXXXVIO8VcAMEYZB8p8t5ie0loDTERCZylt63kATGo6BP6NFX6Mv2OzjnxCs1a8T1Rvgt+CuYKz6tlanpSj0AnkN73OIPqfdQJq1ei1JI8766O/DxG8qHQrvbUW6OEobgR/8yxkgIB/ihCCcEHheNu7LqpG/jeO6fKyXx/dkTO5ELCJAvly7i8d38epdvHqX/LZOp4cTd/FYgRp8Ht0cxNyIdReEOObjuIfGfz2J3dFaVoKfFX+WTh1N8vj6KXSPlRbKMH3CNa3DGljIyc6Uuqh4DYr/Mv7qIHsRoyQKsLUNylyOCEEOcUdJmtVUM7TJHnGFYgKhgW9VnhRFmjOyxB+MVp2GumD2up3GD1/SIzrVIGKlxhIREcU3jdkDwOIimEEx6ywdNGtAK8KTAOcQ/z9Kfh5xbRy4jwFLmdh/mvOFnRO0aQSlADgJyL+Rw2nFleQkXHUMH2WdCX8A8Q/rSAT8CSd79TEZCDS6dTp3YyCUxmO6kggqJ4LBtEuvd6Xx84QXP6DuR74WAjHw5TMgggKdnocT4bI6iSF1nNShia42kdnZhWdRHr8a5Fe9/ColYBS/3YiUEgnHon/S6/SOkDfMGaCN0gM9ryeOhn8U/qcwGdaH9WbvjHmOxirC/JTNzs8L9iKKcEUhzy8g90AopFQlgVQq6oNGiCGIk0Gyri7FFexMmAxSdyF7jvr9UZGldlb+41aSE8Meb9QEtfA4ZXDGfYEGl5HaD/8X/Ltum9tIofSHhZ3Vf2ANLEUb3TbquM6Ikj8U9h6t7EdUDb4HAAWR7ftQXtQOfiq5/Dg4+HFw8OPg4Me5jh9Thr9MZKSEyyqh962YCaxWXSO+uBFf3IgvbsQXN+KLG88SOWQb509hU47lVVLPq5SSV/0ir2ZJedXG82WClwxf053XETpX/E/NzUykDNnj/HQBswizSs59ZBqB2XklxOQu1egDB57iG2oGhEyLklNWQc1ZZTrwkVDmDgHTiLg0paC/fWrr7tHqc/ZkEsXaOw9vzdlSvQ0tGwYT1Yqrff3Y8Qv9M63OFdHh26Zf+qBzbX8M7u2+ZaanweqPUw/E/Y2r7pvMrBpuN3MtMzsImJ1o8VTnw51TlVc71nb5q+2ethlkhxjrxxDWZhRp9kneUhCKGD8R4ydaEB6iGYEhOhAS4jmMH3ApuLlU3Fwqbi4VN5eKmwvHbRY4oP64cRplR7FjtIIVzCqAXKrhoiSEy4FhlsHw2Opvvv1M9XcyCNFnL395+lRh53c+c/TYge/sKRJPPfvhN2cUcdf898tHtp86NPaR0HPwx0oMRbKR+5FsjeDuY664qu+4+txx9bnj6nPH1eeOlwlBYlkxIAbQ47vKUCsZDsbg+Rh8OQZjMY2zjCQyTMfRoCR5svbnd+9BgmXN9fRO5pfo1YJZ5RPCVVNyP8UZtJXDWEbiJq1BSyM60FYZeAyxAkWxaD5FAK2Bo4bNbrNWkVdrdlvMbkFbvZXlPaLZxTPVZq0g52vfW/wArkWxxQpWni7Zp+xH7SRQpQeq9ECVHqjSA1V6cBZpjVs8f9qK8/4ZOUigKF5XVbTOimo8tMK1WkvQ6QhZtKw1aHcGLVqXVs/QNKrlqF/WZoo+mMXfwV+j50qAtWeQI/75D+RFDyTASa8xPMOegzkUxB0wI2dwlUsL6PmWHnApNVMeT87Nlp71156BnTOetkxIx9AEiYhY6wxn/KGmAK8IIbJwaPLg+mbWJOj1gtNs8wqMyWwSMtO95FewRBSSCKgYk+8hWfJgiyQ040SlCftIFs+CnIo2pwrHqcJxqnCcKhyHbU1vjc8EOd49wy/F5FLNSZARoVcVdRhflpXUZBJqWYlFw7DQB8n3GEvIHW60MdVITTNaS8iBNQP/UcPbgy4XSlcM5uosfElgPNjcNDxH/LfKvYwBa8vALOmt8mOixOoZikYnDC57ZbHylEus+9YYkt8FRs4AqyKuVRXXqoprVcVdShcI4SRgTTPWMkypzoNq+ZrulnlLTTbZO8aQB7CVn9iTdTH+CVPHuMUtssgXnqs97IdfZwWPqhvErQLoBg+diJtMFlUbFjVbkUeDPL6NH8+iPp4Fa8Pn4zKZHA6BOYcJv6ALc7wez9AlOXwJD3ztM1zGFKecoWnnHJYDKc2OlabGNMShtSCQzSuCycVBHCIdhn3QukyNrahaQEQKfaQ9n4FLslP3G6wuQ5srHg5bq58I9HoIgtCKfofDb9Y2uma8cb9XgB3e1lyzAxIQveO0BczaYYvHrNV5c3Hi9eInO0e+MPbRH+ta/U4ixNmT/spPC1tvnM9OfXeK+CFiYhRfZJNGXLB1cYG6LPcj4uCA5FrWa8BEYMFEYHEoQOUlFjcNDiK29qnw+lTto/H/YHjR+DsMr0+F13eOyAMOOGHyuGk2jC1AbRzUCWH+Ki9e3iEglnUICOry2JOvHX7i548MjB1+7fBjlx4dPBW/4Uu7dn1pUzK2/ot7dj+1MUF84csfHdu05pl3vnbkg6ObVn/zj9/e8bePrFj12XO37Dn/yOSqx36AuQ/58IuIHzwgCe45FtGogmhUQTSqGWtUM9aogmiwEdgFL4bHi+HxyjWsF+cY3jKROw4E3Bc5odHokZi6E9ZpvZwO4yShZiJLHAFl41huEJgpqGUUSL4o7fv+PU+yYtCJrb/BBa0Nk9vvmEie6lwz3/jVp1fcMhQhn9z81zu6qpl66EXKZuylDfeumbq1YKy8nxjequgY+4YOydwKBsDjko/PCG240m7DcrTJcrRhudqwntuQnk8ncW6VLMnFBq8WHVcWH++oxYcMjoDAOe5BdR3UvrBLgpJk70YYnApO29XoJrMlTpauyZWKagiQU80MeQ0oNruPVFMmu+iDsBCLZ2AtTdBpLBGfK2jRUfus6Z5VnXtrcKG0QWzudY3vXREP920oBgrphOVOo7ZaGVjpLOUff3Zga58fMRYK7Sxy8+bCmlK48os6jM/F/TRpaF+9s7/3lqkOizHVtaK5+r8jXvKhie12RlOdCHaulOPhMKo3tiDfGQVvngG9uG2B0vJeFaReFbxeNeL0qmD1lolGKZWTRAucyEmI4SK5SE7vduB73Th5dfNynwTd4sYKcZ8lmnEGe8ItE+T5E051tCjjCyYBTgB95hyMgzbAwZikEwJtsE3CZZ7SE8GzNqFNsHWhBOZUr5tO4nZIst4OKdZ7IfwCj80V66auoWw2dTXVUldQbaFOvRqrqj3VcTXklv59X9/Qu3NNp12HaFRrzK/cPdY23x/JzXxixydm8p3bH59NrZnsEjUUQWp0jC47MN/RsrLgys1u33HrbB7edsNfoRQ4EHJE/TavmQklwr62lfm2FZ3N+Z5Vu6emP7U6bXL6RZ3gEHGnyxP2epv6oq0runL57tndSEcm5O+vINsPgZtOOyQEr0PAqJ3Eacef7fw4HxFQEYFtX2Muw8QJr+rfuNz9vQzOT1L8hRpCwWsbCUqN+4qc2B3GHG1HHI1mauJHPiinfRdEj6D98Ct1U9yiFTyi6DVrtWavkk91L36geR1xcBe45USsC+Zw/d+PFRxFj6LFk0QWomIRn4nCkANPkiHoCOBJuhmmm2A6AtNh2DbTMBNu0pHLC0PEZyWU8OF2CG7oKr9Rpd0dh2GyNsvAHiiXgjBfKwprM6hh6Acp3pP0+VMeI1X9PfEBaXQlA8FGj4msfkcDhVjAHxEZAoYhtJCsJerzBC2s3PT2khox7PWFeUjHjAJmKcFI/s+PsrU59V07KipJrVH34QWqQ2fCqZlJ9+HfU50cmtNGl13BCPe03kEYZUGT5E1mYTIDYw4Ys8O4DSYATM6EdYJ3RliWeiG9KW2gpcKXrbcp2CV52bqQkPy1gTYnQ4GIVUdVX6++SuutEV8wZqINcHP1qJ7hkanGbJwG2qCF5sSQ1x8XKH31+R6by0SjNJQlyEoF0TBJm1w2YpYo2dwmVCYj8/DAX2sN6Dwqkys/wfF7A4ozJfIfUd4pgeelgKnP35ftI3WsvaBHVlrAQaOAQ0WBx0EE1ajvSkYQj5sA1AMc40GHGoM61CyoQzXsjrIatDrKhFayCPafgAJfIDrPFyAowEIh09tQhm7J9HIIhkKU963MWPev9JMUyNYqoAVBroM2ztcI/UJq43xRrYZyKLhvxNUDBhR2q8AqzdKrOqWUnP4wStiw5XOtbWSJ97hdfmPn49PDe6fTPXc+u/2ArXlFUW54a1EKw7j7Vt9c2PwXq2J/8+jAtj7/upW9O7sdej1iYP360lB06ObeiV1j0aHCyha3N+zV8k6T0+sKe8XGuftXXbCnS8mh2b4BmR+PIHwv0btBA84eT6Hihwu2qiGgVQ0JrSpi+FhGrLUM35Pc1hROkFIBdEUKayCFeTSFMU+VCU5igZVrbQlSdFMZ0i/ExtxD/EQRTY/RkzjyYmK0F+sZ5BJq9eWSuPXa3F9ddVIBZAQflBOGS/mtn5tPjQwNxVGVaEUpoYYRAw4nyg8T4yPDiS2PrEk8Zy2slgLd0mB84EBfz9o2J3zzrnOHhoRYR3IHCjkUhUIO3a5VSh5t5d+T7WF+xYPP3zX4wLZuc0Nfrnpkdk3X1v2yj61HmAXIfwAt4OFjnmVNw9fVgu6y3Dy8TgH+uysLb2WZChXgOsmQNUKj802/xBlG/JEyJE6KY+Rvm3G0Zg0jzY1lqDnGTuL6L7Ugv9SbLxfqpbdmWQqJ2EijkJGmlkRi5MgAQTPOrvG12c1fuKmld/eRdanpgRYHqyHMBlO8a65j36eC0nxXcXUppWc4hvyG4BQMzqjXLO0/cddDP7qvk3eFHEbRYY77g4ng6efWPLg2FUmFtaIX29KNCJen6TtADBTBI5K/1Al17iL20CLubhcxtxexfRSxuRTPwfcRmlkFtawKVlYFK6t6bVYFK4tNihODQ7pi3E0ZkWvSxx1jyN2pE8ZJegLTkWxQpau6LbJF1bKs5W6YR+lV3a7IDFyebreRTzOCx2JFpcXwkfVbP7smkdvy+KYVD0qMxY+tin2m/5P9JWRDyKZ6g13SUNxZM6F9k6snHzy25c5zh4YH+wldrRapDCLr2XJAGnjgJmRN/c1KbjqP8DqCYlsKFMBzUkO2tdS6s5UUsUeJePVIFIONOBdqxHgpzT05yiFreP/UQOpvUkQKwXQKe1yBUs2PUq1MPtbJoxLmKIxgMNj44kHqcxRxnoIvU5CiPNlfxcYcb91o3GUkjOxbHtnE5pf3eBTHfDWlmJvc4ZOdVBMOLjMs65XmR1jjrTHZRckjcWfluG9o17S0bTSrZ3QakiAZXevq3dLOb+3p6Nr9ta23fv7G9DPkvfu6N/SEUNEXD47fszpjdVkZo9NsEE16ndMh9txXvu/OM58eHNj79FrxgcOZiZvaMIYkaKk+ST5M/hT0gBVgE3hZsprTw9jGhrUIhOEAL8KJ4XwJr7Sh45JqXWh8/QX8VomZwgsrBpMZTky5KVMTmWcYjBwvL8+dlwxoks4zbjeTT1PYxaUC9u21+F+sDfDotrUNUUmHxqipiSHbx36pn71std7YTv6ma6Qh0PeL9rEbfhGYUttmJZkzFl5RQl8Kr8tcSMlLblm85GYv8hdTPF6sUV/kVf8URAW0bMGxuBHNbH6o1AU1vNtQGV1olV8Vu0alAyoW6oSC26yxLKJ09Yh8WDR9OuzJzR9c0bbVbbb3tv62f9dMpnDbM7vvOLKlkQ82B5qzuag/Utjw6YnksB/yglCt3jTfNJy133RD80jWPrtp+jeBpIM9dPf4TT1u8s6wP7Imu+Ke2UavzZzxhTMERwS713X27JprjkrrCsGe9rzTOdHYfWMsOt83ed+qNKsNVn+/4ZZA+2hi3c3+tpHKxo4SoXWmkwlrb7+3qUfJZY6gXOariJty4N6TpQJsENVgINaISFSZSlSZSsTEZPfpcLjRYX/RYc/RyU6jw+9xQMK9Nl+DExVsmtPpsciQc0IOH3KhVu+sKXRUvLIBKEdT5jodKSVBspJf1ZoV1nFkRpu6DwygQ3mprEZGw58bWb9/IuisrYoRpsmNA5G1c5VHameWM9D4aPfND2/GceKhxQ/gSjoLrCAIPnu6FJ4K7wyTNjWfsakYyMeiuuqorD6+ra4+yqDZzhG7UeVv/bhWlQqpFcH0AufHawv+Muw56eRHZXxeWUipseDS0haHa7uj4vJNJd0YALsCgB0DIDZ2dKTwXx0C8lCtywibOhqSRfQnx8bFn1efhFuRzBHQBD5zYiqH13tkukTjH/CTR2uBLaou5EXLxK7jKT1Qr1vWWFUkq3dYUfSUOKcT5DJYygyS8kTCP2pBXHKMlj0VySrk87Ws7lJtHZy+ogC0XdlqvULwlb7StuFA2sFSkGRYRhO2B7M+oxahgMwBodBZbEh1dDaYtu1fldJyBsFswP1s2pIeGSW/ez1AFF84gHyhAD4v6UutMNkMmyUz3n6w+LIsXrNKAM1Yfr08ygTQfI6IowpQr6KgV11Fr8KjV1HRY/dw2dJpgEFR3MQW0tGJUc+QUHMReVsHSjhQlisXfrnXa5ZQN4U/q2V7QCuGXO6ww6SpHrraSeAqrdkZcjhDVtZgqp6FOww6uV2BygMW/qFquNZVPvoZvJszsCSiFVbv4Ktnq1HBqmIGuxFmViDJ6wI75XWB67fdl6wEvneS44dkiVUTuP46wDXW7bz20epxjH4Z8fxK8JbkNuOOuby+FJMr1bhcpu6agUPLolk9zGFPFlVPFlXLlqOcz4f3Q/l8OQ4HOw4HOw5/KCcHOw7Z+OmVuMOysufaBR/lY69ZGDoH30Ohloea4+NjKAXVSIbesZ6hdPtoesK5zAKWtzCLajdLKNaWJHDMBKmlHv51A+fHRFJvrdRUzYV+WQmootbSOJAp7h1EHuSwB0XG1tifKd5Zj68as8du8/LMxGOj7esGmvj09PhwZM3do/6lSBsuXhVprz1DHkKFKUmyOu2+uSlXtjfRPNAgohA8scRFSIc5cFgyKTrELyotXa0nlY2u1icum3w6nAcr7ISzCIWsZJ5C759WCQrTk8SlxxqckdEa+Dh/WFr74a/A+7+mqRq4H09TdRi/OPFf0NQVUCGIblTyWVwXvYowwv30ZyVPKQmv2uIXq23xu04P/fXr9tBx0urLcpBb1pwPXNmcP0twuEd42gQmdyFFOcsQHjeNhVENpZaauFZSQcvWW+7z/4/deVf03slXO/Z+f/fOb+5oLe793h40tj3n7rl1amT7QNBdunVq+NaBAPz3HWc+M953/8k9aBxD44HRB7YUC5semBx7YHOxsPEBXGdXD5OXEDa4zj6I6+xg63VWyZQYtLRchtMZq1Jiy8W23ClVqu3r1tij/NTH1tjXK7GvZyUfW2I/sTHR3ytFlpmLxeo2M8mJyZXpLX+JS+y8XGIPxQfu6+tZ1+aCv7n7Bw8O86FCuNpTi4jUb5DVkLgHdG9DT9I6cejoXYOf3tYlJvubq0/Nru3adqAeM4lvyX2frSd3tcCYSQXJpGJjqoFlUlE0YbDMQBIxe6HABzBqwIUwjEpsaixmsgZGrRNADWEyjaXqWR5c1ru9rutgUDTEtwgNq9XavRGrs6mlI3y140R7O4peQzDi1VMkJLfYfALLslpLZqKt8vy1rvNg60DcRGo5jjW6FZmnFxeIl5DMo+AlSZ8dL41PjX9q/Og4vayt/o7aTpe9phe3HsSr2u1ymx3+SvIrvXW5q45DjNpa19X2IZ6F72C3kThM93pJTgHQYQx9Xkl/VE/oM6+2cb8VVgo3CrsEUmmh/xvun4/ZLivmVW+eq63zebyRcFnrfClP/P9tnRMv5Tc+sKJpzWCTjaNwazxVWt3eMJBzx6WVc9NSPDmzfyYy0pG0MiRifU7DhlpHsw1S0pqQZuZmpTg0Dt6ONG53WiJ+EWVW7oDbHG6NxgoJfyjVs7qrZfNoo95s5fUmGy84ecbmtInhJk+8JREINXStwroILv4ncQf1fdABNpxMAiGcVjFPq7pIq7pIq5EsrdplGpuh3m5IL4RHvIYF+0gzzisZJRBdxIan7svLXbygtG0oxdbCyn6wTthStzo1Z8ILQ7ZaoU3coeUDyYx9aJvkvd9kxv3zT9ZSpzdxb9BserNt2B7xWLQ0S1M3eEO8kdVEx/euIIyBiOgSmFdqi6CvMIJLjASq3PwmlmNpowPLfRj3cMgfIJ57QvIjdtPFsQXFsQXF8cJZXM4v4rycSMD3X1B8za+i4ldRQeN7snf61T2u/pq7+lUb9eMsnBXTo3Ed7RxF6Qa91MhZviGgblLXbeQspZhytG5tW2rpPM2YvVa7V9BMfkGmM8YScODs254daereP8hY/Mh3zWyd5fbNrei65eEtRKjmn5U/TW3qj66dI+6qncH4tKBc7hDCZxC8dgYMI4fpRkbRjpsNyXbYhke8jTQIYwEY8+M91zEvjHtggoJJEnZ0ws4O2JmGXY2QD1jlTYlyscbL2zvxLsUA3gdqUk/jEW/1nTTh06beUfk63Boq8VP8Tv5TPMVLZtsInx+NjnZ8rhE24vcasR/zom3klsZ9jcQgOmufYDGyP8dbEecvlEoXU/OpkrxZMat4KJCZsM6J8sZglKyrX2uIk3Fm2fpHzUDtoh3v3r5qSh+i6Oq7pMGe8PkbnHrybwniKGlwJX3+ODqqvk9TuA7yhMxa8hcE8SLBmpEi/GYt8S8EfIVgxaDL4RUY8quMxfTRt/FGOUpr5IhHWbayt3ZErjFZGFbHELgmqLhYlvgP1sDIX6eoOGpHhJbD+goh3j2A9BUBM2eAe/FtqQUv9Lph0g0dchLugDFjqxGvebhwEOxwQWc7Gjud0D/q5MRRbpyaAuNq8luS9/WnoIzRfCpIKnbYJuK9KrFCfWVIlBGCFobI36NpzrkCAqE5wPJk9UdaPuLzhSwsDSH5nkYIBTwRQVM9xQu03mKERcrMkRusDiNNak2GSoZ4RdTRyDPNcq/rC4vvUv8JXsPf6QBh0PAj4CAOAB/QE/sBuoA4cFoTtLJuE/6ORz5/MZdDPoR/r/yqB/0xc7g929WRwX/w7zKdaNaB7PRC7dztQ9nMwHX+0HPRAFT3kj+jjfL3bYpgEqwAN/wAGOAMsIEOeOqUdWBAm2Z+CPtRGhSAq4AWQNgvmSjCcNrlKoVPt2geJYXRMkyfLDGPEgQoVV6rvJStvKZuIHj1jdfe4H//Eiox8m9cQsJAISjIf/I3BJQ2d0s81qruQo8tLa20tikmSV69p5X82UfryamKhrg/XFqdp30uk8WgoQmPw5zuivKzN0S7Ml6GZDQkrWUSbX2h8dsHQ79kBK/VpixH2qzIRCv/Rhs/+ANt/LCfuv3Dw6Smc0MpQn6J0xKURlP2OZwNncHR1SaRp3QiL9i0jFnQJwY2VD6D28pas8dqVT6rMinrVt2/C/BC9jB84AxoxQFTwIstaIL3KbSU1TMttTOF2plC7Yy8qVNY2uQ5WtvcPIo3qSvXNNVC8fIzcqugqUw4JaclIW+LSMiBXp3jrR6JMuGQXD5T2OfDO4Us8ovP4uPa5Wva8ddnrF4UDOUb1ZP4xvazRD9KNeT97EDdE798FV9dPTmv1uXn5dWTPry9V/5GQ18T+tC+2kP31R66T33ovjLRLwkc9l2upZtOV5zrBiv0JrXjWqxv5ruk0MkVS/to4JflxvIG+ZT6A6/osJL1xrayIYMs1NdW7D0Qb2ONq/3VVvJs1+5nbtv2lR0difEdg10bpGDz1iM3b3lsvhEvrQzvHI//q7d9tuX2ne7imq6bbm8IDd4yUNrU7X/o0MEH4cSqB9dnGmbumey+efV4yD84vaF1YN/afHZ6Rym/cdVoIDw2t4nY1DDQ5NwyF+/vKvoL91e+kRnv7Q76e/pGGzffetv/BTzkBHAAAHicY2BkYGBgnbfjXLdTfTy/zVcGeQ4GELj99p8FjP5/9V8x2wPWfUAuBwMTSBQAxMQQMQB4nGNgZGBg3fdvMgMDu/z/qwwMbA8YgCIowAwAhnsFbXicHY4xS4JhFIWf7733063GxlCJSBdBpKnN0KFFpxAFycC9foNjmxTfJtIUL86Bs5ND0/cTIgR/gmBHLzzcew7nwA07WmjCFyQ/2lANr9wH58MuSPyMjngRE1EXY9ELV6x8QcX7RN8R7Y+oTgxvFP1GekBMa+JB+Yoyj/IibfvlvHjJnV9Tt5yBN8jsib72yPYMbU3z6CU502R7yO3zdGeFZ7Kj77enbBY26pXohiUl6Vn6TdPmlNMp7/oPev9+SS0dAAAAAAAsACwALAAsAF4AggCkAMwBgAIgAxQD2gR6BIIEygVYBg4GfAb4B0QHqggqCHgJFAmMCgYKsguEC+wMfgzmDZYOMA68D1QP9hDkEWgR4hJqEwQTSBQqFLwVShXiFlwXIheeGC4ZBhlsGbgaWhuAAAEAAAA3AGAABQBIAAMAAgAQAC8AZQAAEZABggABAAF4nK1WS4tURxSunlHbxygJieAqnEXAGSO3B0GRcSViRBghjCiYXfW91d1F3xdVdadtIf8j2WWThYss8hOyzDI/In/CJJDvnKrb0/MKBjLNdH/1Ou/zVSmlvhjUaqDi3z01SXighup9whvAvya8qW6pPxO+oIaDLxO+qLYGXyd8CfN5wkP13cY04cvq5uanCV9Rn2w+T/jq4JuLfyV8TX01/CnhLXVz+HfC1wf7V39O+IZ6sDWDJYMLVzAqxCrGA6z8kPAG8C8Jb6pd9VvCF9SNwecJX1S3BncTvoT5lwkP1YfBPOHL6s7GHwlfUbR5O+GrGz9ufpvwNfV6+CLhLXVn+HvC1ze+v/xZwjdUee0DIkqI8S4+D4FeKKty5VSjPP4nKmDuCZBTrXxrzFigWmVYeaxKfEgdYG6qZljzMjL4Ndh9iO8CO9V7ure7+5Be2Nw1vpkEetK4tnE62KbO6HFZ0oGdzoKnA+ONOzQFzjyBshKCxxBkMdSlHTsAFj9VHdY0VtSBmXalBjht+p4Yvy5lb+XsfRzordmjJHyPzbx/vurX4pVPESAIydQDCFSvjfNwhe5nD+6df/z4POGfw2XwGxA8Fk3YQfhlD3k1yCwHkYA5/AVGlXg+x1yzOnP26uQ/pZQtqkUWW0PqFUZWbGD9L4G0jLzorDE7ShY0ax7kGHVYDeIl785WMSDrydgwM440OTO1PhhnCgpOF6bSbk4Nr6wNJ2cXDdmaIIZe1Tbg/Mugg/Gk62IEAY0oyJuuDs4an51VG+fFQJ2pTql9+JSrbez0agenC4nQM5HJ3qv9Lt/WfocKQ89c04Tz0s3JqnCkkHBxuL0E0wsyspfTNsFsBVyqJUaLVCS8p4PEgHkjpRKDXUjqpiKlSVKDFMNRsmJqWGesYu7g5xKKCWY4BJ0Um08lqKW3raS9lAB6dVckVzJTikSNEMb5XkslzckBbZOVNWYq0Rplsp9hzQLW2IovMR19MqLtrKlBBAj+R55hqyrs1dAf1sq2Z6EYs6iFxPY6+RVbYiw7jyxe94ij9lbORa/nGGeniOS2SKtEwlLi0CW+W49330isfSFR1aumtinbUSPnmiCjXXkTbZymPcw575L0AC9ihg5XWdJSI9z41TG/+mLPYYkW/XnSf7wpNVVNYVxNXteewMF2QhNd2XJJC/Qr+W4cSkMOPVXYeuoJLYjeraTn0GquBgNm9DzQxOjQOTSjM7okG6Aj93fJVxosn+sWmI9UXRlsC5F1VxmHnd4EEeCpdQ36jtsO0suyWdAMlwPZqtV5kMbnuwKW4QiVtoYu0MTYTkVwVBTM24DDdm6yntxve6p0vaS8wwUT7WYGqc2CnGYesnAbB3VFXctqIHGKGW/fYXto4NAhu6RpoV0VdTFN5DPtYJhxiCgXX0AS98CMIySEP5m08XH2yaQVK+wJKB8u+qkkp4WEJWY5SRNpAW4ONQuh3RuNFotFVvX0lOVNNQrLtpk63c6WozxMmjr4kzb0UphOYunOV9p7uXxwohGiOQtV6o2QSizvpZSllzIO0oBeCCNKJSlobl4jpWdFd7wvxnK2b4GnuE328WCIZ93aSmz8Qvj1qJkXoiuXZj9Lbxzz3hwN0AmdFqvmKGS9lTfCcq0hWolAnVoiyjLyzS1+0m9ej1SyjVM7cldX8Musmvu0VfUpyR8foyPpPZ1TIuR4l+bHiPG070e393G7Hq1FgD2JvsTrob//3OqqKYRsayFdfa6nMc76WExNegucfBFwVLkiOzlZCHGxN2Ylh3eWQn7/liH1punQw0vqvEHvgra4ckmDMoyrbOCXwHgpXf301f5jrDoZgFCKLlLHYmbz2dpZ/No6L7uCHyENFda3JRRwc7fOYkOOXaYOGfW6mxrMs213yFRjPnQkqu43n2mRbGfuBI94vEvySHAr7fKgSbIeiQHbFlrAsfwIcczERbOoy0avK4XNOloKplo9fZoutF3AU+TQ5ob3zEzZnnDo/yOrI6IaSXKZauILIJPSb3GffhSFCYGNCjPRuBwy7du36h8HEyIiAHicbcvLioEBAEDh7/9tKOUWimZHLNxlptga5H4J02RjYek1vIx31GiydOrU2Ryhfx5xN+/4ehoIRSQkpaRlZOXkFRR9KCmrqKqpa2hq6+jq+XyefQND30bGJqZm5haWVtY2tnb2Do5+/Dq5B2EQiS7P18vi0mjFXtFr/wHSyBJOeJzVlmd4VOUaReedAEImk0kgk0ISThQBMYCgAiMgDC2UQELJARIgtNB7Cj0QQBQLYO8FC6KOJRxQEQvYu9gbKti7oGIvuXvYd/+9f71GVtY6NRMfvo/Xa5aQt9t/1q5mmTYUsV6xTrFWUadYo1itqFWsUqxUrFAsVyxTLFUsUdQoqhVVisWKRYqFigWK+Yp5irmKOYrZilmKmYoZiumKCsU0xVTFFMVkxSRFuWKiYoJivKJMUaoYpxirGKNwFSWK0YpRipGKEYpiRZFiuGKYolAxVDFEMVgxSFGgGKgYoOiv6Kfoq4gq+ih6K85U9FL0VPRQnKGIKLoruim6Kk5XnKY4VdFF0VlxiqKToqOigyJfcbKiveIkRTtFW0UbxYmK1ooTFMcr8hSOopUiV5GjyFa0VGQpMhUZinRFWJGmaKForkhVpChCimRFUJGkCCgSFc0UTRXHKZooGisaKRIUfoUpfP8Na1D8rfhL8afiD8Xvit8Uvyp+Ufys+ElxVPGj4gfF94ojisOK7xTfKr5RfK34SvGl4gvF54rPFJ8qPlF8rPhI8aHikOKg4gPF+4r3FAcU7yreUbyteEvxpuINxeuK1xSvKl5RvKzYr3hJ8aLiBcXziucUzyqeUTyteErxpOIJxeOKxxSPKvYp9ioeUTyseEjxoGKP4gHFbsX9ivsU9yp2KXYqPMUORb3iHsXdirsUdypiijsUtytuU2xX3KrYprhFcbPiJsWNiq2KGxTXK65TXKu4RnG14irFlYorFJcrLlNcqrhEcbHiIsWFii2KzYpNigsU5yvOU5yr2Kg4R3G2YoNCY49p7DGNPaaxxzT2mMYe09hjGntMY49p7DGNPaaxxzT2mMYe09hjGntMY49p7LFKheYf0/xjmn9M849p/jHNP6b5xzT/mOYf0/xjmn9M849p/jHNP6b5xzT/mOYf0/xjmn9M849p/jHNP6b5xzT/mOYf0/xjmn9M849p/jHNP6b5xzT/mMYe09hjGntM045p2jFNO6ZpxzTtmKYd07RjmnZM04713xkPTM1eq94OZmavVRhax6O1XqseUB2P1lCrvVZJUC2PVlErqRXUci+3L7TMy+0PLaWWUDW8Vs2jKqqSJxd7uf2gRdRCagFvmU/No+Z6OQOhOdRsahY1k5rh5QyApvOogppGTaWmUJOpSVQ5n5vIownUeKqMKqXGUWOpMZRLlVCjqVHUSGoEVUwVUcOpYVQhNdTLHgINoQZ72UOhQVSBl10IDfSyh0EDqP5UP17ry+eiVB8+15s6k+rFO3tSPfj4GVSE6k51o7ryZadTp/Etp1JdqM582SlUJz7XkepA5VMnU+2pk6h2fHVbqg3feSLVmjqBrz6eyuNzDtWKyqVyqGyqpdeyCMqiMr2WxVAGlc6TYSqNJ1tQzalUXkuhQjyZTAWpJF4LUIlUM15rSh1HNfGyRkCNvayRUCMqgSf9PDLKd0zWQP197Bb7i0d/Un9Qv/Pabzz6lfqF+pn6ycssgY56maOhH3n0A/U9dYTXDvPoO+pb6hte+5r6iie/pL6gPqc+4y2f8ugTHn3Mo4+oD6lDvHaQ+oAn36feow5Q7/KWd3j0NvWWlzEWetPLGAO9Qb3Ok69Rr1KvUC/zlv3USzz5IvUC9Tz1HG95lnqGJ5+mnqKepJ6gHuedj/HoUWoftZfXHqEe5smHqAepPdQD1G7eeT+P7qPupXZRO730PpDnpY+HdlD11D3U3dRd1J1UjLrDS8d+bbfzLbdR23ntVmobdQt1M3UTdSO1lbqBL7ueb7mOupbXrqGupq6iruQDV/Docuoy6lJeu4RvuZi6iNcupLZQm6lN1AW883wenUedS22kzqHO9sJToA1eeCp0FrXeC8+A1lFrvbAL1XlhbMa2xgt3g1ZTtXx8FZ9bSa3wwhXQcj6+jFpKLaFqqGqqiq+u5OOLqUVeeBq0kC9bwDvnU/OoudQcajafm0XN5CebwcenUxW8cxo1lZpCTaYmUeX8pSfyk02gxvOXLuOrS/mDxlFj+XHH8Ae5fEsJNZoaRY300qLQCC8t/hOKvbT4X+8iL209NNxL6wgN4y2F1FAvDXOBDeHRYGoQTxZ4aauhgV7aOdAAL20N1N9Lq4P6ec0LoL5UlOpD9faa4993O5NHvbzUUqgn1cNLjf/VOIOKeKmDoO5e6jiom5daBnXltdOp07zUDtCpvLOLlxr/xTp7qfG1eQrViY935E/oQOXzZSdT7fmyk6h2VFuqjZca/790ItWa7zyB7zyeL8vjWxyqFZ/LpXKobKolleWlTIQyvZRyKMNLmQSlU2EqjWpBNecDqXwghSdDVDIVpJJ4Z4B3JvJkM6opdRzVhHc25p2NeDKB8lNG+aINoalOnL9D05y/QhXOn+g/wO/gN5z7Fed+AT+Dn8BRnP8R/IBr3+P4CDgMvgPf4vw34Gtc+wrHX4IvwOfgs+SZzqfJs5xPwMfgI/Ahzh2CD4IPwPs4fg8+AN4F74C3g3Odt4JdnDfhN4LznNeDbZ3XwKvoV4L5zstgP3gJ11/EuReC853n0c+hn0U/E5zjPB2c7TwVnOU8GZzpPIFnH8f7HgOPgmjDPnzfCx4BDyctdh5KqnQeTKpy9iRVOw+A3eB+nL8P3Itru3BtJ855YAeoB/cEljt3B1Y4dwVWOXcGap1YYLVzB7gd3Aa2g1vBtkBH5xb4ZnATnrkR3hqY69yAvh59HbgWfQ3edTXedRXedSXOXQEuB5eBS8El4GI8dxHed2FikbMlsdjZnDjT2ZS4zbkgcbuzIaGNc1ZCxFlvEWedW+eujdW5a9xad3Ws1g3UWqA2u7awdmVtrPZAbbR5k8RV7gp3ZWyFu9xd6i6LLXX3+M/2zfBviPZyl8Rq3EY1aTXVNQlHayxWYwNqrHON+X01KTV5NQlJ1W6lWxWrdH2VIyrrKusrG/WsrzxU6fdVWuLuhn07K7NbFcDRVZXBlILF7kJ3UWyhu2DGfHcOPuDsyEx3VmymOyNS4U6PVbjTIlPdKZHJ7qTIRLc8NtGdEClzx8fK3NLIOHcs7h8TKXHdWIk7OjLSHRUb6RZHitwinB8eKXSHxQrdoZHB7pDYYHdQpMAdiF/el5OSk5eTkBL/AEU5+CS+bOvXOTuafSj7SHYjX3Z99r7shOahlk5Lf/tQlvUvzrKFWWuytmQlhDL3Z/qjme07FIQy9mcczDic0ahFNKN9pwJfekp6XnpCOP67pQ8vKTjmPgPoLl2P/a7D01u3LQiFLRR2wv6BTth8qYdSj6QmhPem7E/xh0IWCjWE/NEQbg8lO8n++LeG5IRocpfuBaGgE/THvzUEE9KjQZyJv7Fd0oiSglDACfjdPoHigD8a6NO/IBro2LnAl2B5Zj5LgRKaxj+FhZ0CrOud6dbY8O/5jpLR+fmFu5v6RhXWNx0xvt421rcZHf8eHVlW32Rjvc8tGz9uh9nm0h3m719Sn1Y4sozHGzZt8vXLLazPHT2ufmtuaWF9HSIajwaEL3dHuq9faX55VU1Vfn51Ob6VV1XnH/uDI6uJH+XHT8b/VFXjOP5fzbFjX/7//OJt0KQqfFXrZPX/fur//cv+6Q/w7//a4cNf0XF9G/xn+Sr868E6sBbUgTVgNagFq8BKsAIsB8vAUrAE1IBqUAUWg0VgIVgA5oN5YC6YA2aDWWAmmAGmgwowDUwFU8BkMAmUg4lgAhgPykApGAfGgjHABSVgNBgFRoIRoBgUgeFgGCgEQ8EQMBgMAgVgIBgA+oN+oC+Igj6gNzgT9AI9QQ9wBoiA7qAb6ApOB6eBU0EX0BmcAjqBjqADyAcng/bgJNAOtAVtwImgNTgBHA/ygANagVyQA7JBS5AFMkEGSAdhkAZagOYgFaSAEEgGQZAEAiARNANNwXGgCWgMGvVtwPcE4AcGfL4Kwzn7G/wF/gR/gN/Bb+BX8Av4GfwEjoIfwQ/ge3AEHAbfgW/BN+Br8BX4EnwBPgefgU/BJ+Bj8BH4EBwCB8EH4H3wHjgA3gXvgLfBW+BN8AZ4HbwGXgWvgJfBfvASeBG8AJ4Hz4FnwTPgafAUeBI8AR4Hj4FHwT6wFzwCHgYPgQfBHvAA2A3uB/eBe8EusBN4YAeoB/eAu8Fd4E4QA3eA28FtYDu4FWwDt4CbwU3gRrAV3ACuB9eBa8E14GpwFbgSXAEuB5eBS8El4GJwEbgQbAGbwSZwATgfnAfOBRvBOeBssMFX0bfOsP4N69+w/g3r37D+DevfsP4N69+w/g3r37D+DevfsP4N69+w/g3r37D+DevfKgH2AMMeYNgDDHuAYQ8w7AGGPcCwBxj2AMMeYNgDDHuAYQ8w7AGGPcCwBxj2AMMeYNgDDHuAYQ8w7AGGPcCwBxj2AMMeYNgDDHuAYQ8w7AGGPcCwBxjWv2H9G9a/Ye0b1r5h7RvWvmHtG9a+Ye0b1r5h7RvW/j+9D//Lv0r/6Q/wL//KnFT+H1H6/O0=')format("woff");
        }

        .ff2 {
            font-family: ff2;
            line-height: 0.895996;
            font-style: normal;
            font-weight: normal;
            visibility: visible;
        }

        .m0 {
            transform: matrix(0.250000, 0.000000, 0.000000, 0.250000, 0, 0);
            -ms-transform: matrix(0.250000, 0.000000, 0.000000, 0.250000, 0, 0);
            -webkit-transform: matrix(0.250000, 0.000000, 0.000000, 0.250000, 0, 0);
        }

        .v0 {
            vertical-align: 0.000000px;
        }

        .ls0 {
            letter-spacing: 0.000000px;
        }

        .sc_ {
            text-shadow: none;
        }

        .sc0 {
            text-shadow: -0.015em 0 transparent, 0 0.015em transparent, 0.015em 0 transparent, 0 -0.015em transparent;
        }

        @media screen and (-webkit-min-device-pixel-ratio:0) {
            .sc_ {
                -webkit-text-stroke: 0px transparent;
            }

            .sc0 {
                -webkit-text-stroke: 0.015em transparent;
                text-shadow: none;
            }
        }

        .ws0 {
            word-spacing: 0.000000px;
        }

        ._0 {
            margin-left: -1.232000px;
        }

        ._a {
            width: 3.388000px;
        }

        ._3 {
            width: 175.428000px;
        }

        ._7 {
            width: 245.080000px;
        }

        ._8 {
            width: 254.100000px;
        }

        ._4 {
            width: 335.456000px;
        }

        ._6 {
            width: 398.288000px;
        }

        ._9 {
            width: 448.404000px;
        }

        ._5 {
            width: 452.496000px;
        }

        ._2 {
            width: 470.272000px;
        }

        ._1 {
            width: 513.612000px;
        }

        .fc0 {
            color: rgb(0, 0, 0);
        }

        .fs0 {
            font-size: 44.000000px;
        }

        .y6 {
            bottom: 9.953998px;
        }

        .y5 {
            bottom: 23.381999px;
        }

        .y4 {
            bottom: 36.809999px;
        }

        .y3 {
            bottom: 50.237999px;
        }

        .y2 {
            bottom: 63.665999px;
        }

        .y0 {
            bottom: 256.000000px;
        }

        .y18 {
            bottom: 338.588027px;
        }

        .y17 {
            bottom: 358.730025px;
        }

        .y16 {
            bottom: 399.014022px;
        }

        .y15 {
            bottom: 419.156017px;
        }

        .y14 {
            bottom: 439.298018px;
        }

        .y13 {
            bottom: 459.440017px;
        }

        .y12 {
            bottom: 479.582030px;
        }

        .y11 {
            bottom: 499.724029px;
        }

        .y10 {
            bottom: 519.866027px;
        }

        .yf {
            bottom: 540.008025px;
        }

        .ye {
            bottom: 560.150023px;
        }

        .yd {
            bottom: 580.292022px;
        }

        .yc {
            bottom: 600.434028px;
        }

        .yb {
            bottom: 620.576026px;
        }

        .ya {
            bottom: 640.718025px;
        }

        .y9 {
            bottom: 660.860026px;
        }

        .y8 {
            bottom: 681.002025px;
        }

        .y7 {
            bottom: 701.144025px;
        }

        .y1 {
            bottom: 731.760025px;
        }

        .h3 {
            height: 29.906250px;
        }

        .h4 {
            height: 31.582031px;
        }

        .h2 {
            height: 74.139999px;
        }

        .h1 {
            height: 561.500000px;
        }

        .h0 {
            height: 841.900024px;
        }

        .w1 {
            width: 454.500000px;
        }

        .w0 {
            width: 595.299988px;
        }

        .x1 {
            left: 0.000000px;
        }

        .x0 {
            left: 70.500000px;
        }

        .xa {
            left: 72.000000px;
        }

        .x9 {
            left: 108.000000px;
        }

        .x8 {
            left: 219.242996px;
        }

        .x7 {
            left: 226.893005px;
        }

        .x2 {
            left: 241.778000px;
        }

        .x5 {
            left: 249.454002px;
        }

        .x3 {
            left: 270.835999px;
        }

        .x4 {
            left: 288.505997px;
        }

        .xb {
            left: 378.000000px;
        }

        .x6 {
            left: 450.875000px;
        }

        @media print {
            .v0 {
                vertical-align: 0.000000pt;
            }

            .ls0 {
                letter-spacing: 0.000000pt;
            }

            .ws0 {
                word-spacing: 0.000000pt;
            }

            ._0 {
                margin-left: -1.642667pt;
            }

            ._a {
                width: 4.517333pt;
            }

            ._3 {
                width: 233.904000pt;
            }

            ._7 {
                width: 326.773333pt;
            }

            ._8 {
                width: 338.800000pt;
            }

            ._4 {
                width: 447.274667pt;
            }

            ._6 {
                width: 531.050667pt;
            }

            ._9 {
                width: 597.872000pt;
            }

            ._5 {
                width: 603.328000pt;
            }

            ._2 {
                width: 627.029333pt;
            }

            ._1 {
                width: 684.816000pt;
            }

            .fs0 {
                font-size: 58.666667pt;
            }

            .y6 {
                bottom: 13.271997pt;
            }

            .y5 {
                bottom: 31.175999pt;
            }

            .y4 {
                bottom: 49.079998pt;
            }

            .y3 {
                bottom: 66.983999pt;
            }

            .y2 {
                bottom: 84.887999pt;
            }

            .y0 {
                bottom: 341.333333pt;
            }

            .y18 {
                bottom: 451.450703pt;
            }

            .y17 {
                bottom: 478.306700pt;
            }

            .y16 {
                bottom: 532.018696pt;
            }

            .y15 {
                bottom: 558.874690pt;
            }

            .y14 {
                bottom: 585.730691pt;
            }

            .y13 {
                bottom: 612.586689pt;
            }

            .y12 {
                bottom: 639.442707pt;
            }

            .y11 {
                bottom: 666.298705pt;
            }

            .y10 {
                bottom: 693.154702pt;
            }

            .yf {
                bottom: 720.010700pt;
            }

            .ye {
                bottom: 746.866698pt;
            }

            .yd {
                bottom: 773.722696pt;
            }

            .yc {
                bottom: 800.578704pt;
            }

            .yb {
                bottom: 827.434701pt;
            }

            .ya {
                bottom: 854.290700pt;
            }

            .y9 {
                bottom: 881.146702pt;
            }

            .y8 {
                bottom: 908.002700pt;
            }

            .y7 {
                bottom: 934.858700pt;
            }

            .y1 {
                bottom: 975.680033pt;
            }

            .h3 {
                height: 39.875000pt;
            }

            .h4 {
                height: 42.109375pt;
            }

            .h2 {
                height: 98.853333pt;
            }

            .h1 {
                height: 748.666667pt;
            }

            .h0 {
                height: 1122.533366pt;
            }

            .w1 {
                width: 606.000000pt;
            }

            .w0 {
                width: 793.733317pt;
            }

            .x1 {
                left: 0.000000pt;
            }

            .x0 {
                left: 94.000000pt;
            }

            .xa {
                left: 96.000000pt;
            }

            .x9 {
                left: 144.000000pt;
            }

            .x8 {
                left: 292.323995pt;
            }

            .x7 {
                left: 302.524007pt;
            }

            .x2 {
                left: 322.370667pt;
            }

            .x5 {
                left: 332.605337pt;
            }

            .x3 {
                left: 361.114665pt;
            }

            .x4 {
                left: 384.674662pt;
            }

            .xb {
                left: 504.000000pt;
            }

            .x6 {
                left: 601.166667pt;
            }
        }
    </style>
    <script>
        /*
 Copyright 2012 Mozilla Foundation 
 Copyright 2013 Lu Wang <coolwanglu@gmail.com>
 Apachine License Version 2.0 
*/
        (function() {
            function b(a, b, e, f) {
                var c = (a.className || "").split(/\s+/g);
                "" === c[0] && c.shift();
                var d = c.indexOf(b);
                0 > d && e && c.push(b);
                0 <= d && f && c.splice(d, 1);
                a.className = c.join(" ");
                return 0 <= d
            }
            if (!("classList" in document.createElement("div"))) {
                var e = {
                    add: function(a) {
                        b(this.element, a, !0, !1)
                    },
                    contains: function(a) {
                        return b(this.element, a, !1, !1)
                    },
                    remove: function(a) {
                        b(this.element, a, !1, !0)
                    },
                    toggle: function(a) {
                        b(this.element, a, !0, !0)
                    }
                };
                Object.defineProperty(HTMLElement.prototype, "classList", {
                    get: function() {
                        if (this._classList) return this._classList;
                        var a = Object.create(e, {
                            element: {
                                value: this,
                                writable: !1,
                                enumerable: !0
                            }
                        });
                        Object.defineProperty(this, "_classList", {
                            value: a,
                            writable: !1,
                            enumerable: !1
                        });
                        return a
                    },
                    enumerable: !0
                })
            }
        })();
    </script>
    <script>
        (function() {
            /*
             pdf2htmlEX.js: Core UI functions for pdf2htmlEX 
             Copyright 2012,2013 Lu Wang <coolwanglu@gmail.com> and other contributors 
             https://github.com/coolwanglu/pdf2htmlEX/blob/master/share/LICENSE 
            */
            var pdf2htmlEX = window.pdf2htmlEX = window.pdf2htmlEX || {},
                CSS_CLASS_NAMES = {
                    page_frame: "pf",
                    page_content_box: "pc",
                    page_data: "pi",
                    background_image: "bi",
                    link: "l",
                    input_radio: "ir",
                    __dummy__: "no comma"
                },
                DEFAULT_CONFIG = {
                    container_id: "page-container",
                    sidebar_id: "sidebar",
                    outline_id: "outline",
                    loading_indicator_cls: "loading-indicator",
                    preload_pages: 3,
                    render_timeout: 100,
                    scale_step: 0.9,
                    key_handler: !0,
                    hashchange_handler: !0,
                    view_history_handler: !0,
                    __dummy__: "no comma"
                },
                EPS = 1E-6;

            function invert(a) {
                var b = a[0] * a[3] - a[1] * a[2];
                return [a[3] / b, -a[1] / b, -a[2] / b, a[0] / b, (a[2] * a[5] - a[3] * a[4]) / b, (a[1] * a[4] - a[0] * a[5]) / b]
            }

            function transform(a, b) {
                return [a[0] * b[0] + a[2] * b[1] + a[4], a[1] * b[0] + a[3] * b[1] + a[5]]
            }

            function get_page_number(a) {
                return parseInt(a.getAttribute("data-page-no"), 16)
            }

            function disable_dragstart(a) {
                for (var b = 0, c = a.length; b < c; ++b) a[b].addEventListener("dragstart", function() {
                    return !1
                }, !1)
            }

            function clone_and_extend_objs(a) {
                for (var b = {}, c = 0, e = arguments.length; c < e; ++c) {
                    var h = arguments[c],
                        d;
                    for (d in h) h.hasOwnProperty(d) && (b[d] = h[d])
                }
                return b
            }

            function Page(a) {
                if (a) {
                    this.shown = this.loaded = !1;
                    this.page = a;
                    this.num = get_page_number(a);
                    this.original_height = a.clientHeight;
                    this.original_width = a.clientWidth;
                    var b = a.getElementsByClassName(CSS_CLASS_NAMES.page_content_box)[0];
                    b && (this.content_box = b, this.original_scale = this.cur_scale = this.original_height / b.clientHeight, this.page_data = JSON.parse(a.getElementsByClassName(CSS_CLASS_NAMES.page_data)[0].getAttribute("data-data")), this.ctm = this.page_data.ctm, this.ictm = invert(this.ctm), this.loaded = !0)
                }
            }
            Page.prototype = {
                hide: function() {
                    this.loaded && this.shown && (this.content_box.classList.remove("opened"), this.shown = !1)
                },
                show: function() {
                    this.loaded && !this.shown && (this.content_box.classList.add("opened"), this.shown = !0)
                },
                rescale: function(a) {
                    this.cur_scale = 0 === a ? this.original_scale : a;
                    this.loaded && (a = this.content_box.style, a.msTransform = a.webkitTransform = a.transform = "scale(" + this.cur_scale.toFixed(3) + ")");
                    a = this.page.style;
                    a.height = this.original_height * this.cur_scale + "px";
                    a.width = this.original_width * this.cur_scale +
                        "px"
                },
                view_position: function() {
                    var a = this.page,
                        b = a.parentNode;
                    return [b.scrollLeft - a.offsetLeft - a.clientLeft, b.scrollTop - a.offsetTop - a.clientTop]
                },
                height: function() {
                    return this.page.clientHeight
                },
                width: function() {
                    return this.page.clientWidth
                }
            };

            function Viewer(a) {
                this.config = clone_and_extend_objs(DEFAULT_CONFIG, 0 < arguments.length ? a : {});
                this.pages_loading = [];
                this.init_before_loading_content();
                var b = this;
                document.addEventListener("DOMContentLoaded", function() {
                    b.init_after_loading_content()
                }, !1)
            }
            Viewer.prototype = {
                scale: 1,
                cur_page_idx: 0,
                first_page_idx: 0,
                init_before_loading_content: function() {
                    this.pre_hide_pages()
                },
                initialize_radio_button: function() {
                    for (var a = document.getElementsByClassName(CSS_CLASS_NAMES.input_radio), b = 0; b < a.length; b++) a[b].addEventListener("click", function() {
                        this.classList.toggle("checked")
                    })
                },
                init_after_loading_content: function() {
                    this.sidebar = document.getElementById(this.config.sidebar_id);
                    this.outline = document.getElementById(this.config.outline_id);
                    this.container = document.getElementById(this.config.container_id);
                    this.loading_indicator = document.getElementsByClassName(this.config.loading_indicator_cls)[0];
                    for (var a = !0, b = this.outline.childNodes, c = 0, e = b.length; c < e; ++c)
                        if ("ul" === b[c].nodeName.toLowerCase()) {
                            a = !1;
                            break
                        } a || this.sidebar.classList.add("opened");
                    this.find_pages();
                    if (0 != this.pages.length) {
                        disable_dragstart(document.getElementsByClassName(CSS_CLASS_NAMES.background_image));
                        this.config.key_handler && this.register_key_handler();
                        var h = this;
                        this.config.hashchange_handler && window.addEventListener("hashchange",
                            function(a) {
                                h.navigate_to_dest(document.location.hash.substring(1))
                            }, !1);
                        this.config.view_history_handler && window.addEventListener("popstate", function(a) {
                            a.state && h.navigate_to_dest(a.state)
                        }, !1);
                        this.container.addEventListener("scroll", function() {
                            h.update_page_idx();
                            h.schedule_render(!0)
                        }, !1);
                        [this.container, this.outline].forEach(function(a) {
                            a.addEventListener("click", h.link_handler.bind(h), !1)
                        });
                        this.initialize_radio_button();
                        this.render()
                    }
                },
                find_pages: function() {
                    for (var a = [], b = {}, c = this.container.childNodes,
                            e = 0, h = c.length; e < h; ++e) {
                        var d = c[e];
                        d.nodeType === Node.ELEMENT_NODE && d.classList.contains(CSS_CLASS_NAMES.page_frame) && (d = new Page(d), a.push(d), b[d.num] = a.length - 1)
                    }
                    this.pages = a;
                    this.page_map = b
                },
                load_page: function(a, b, c) {
                    var e = this.pages;
                    if (!(a >= e.length || (e = e[a], e.loaded || this.pages_loading[a]))) {
                        var e = e.page,
                            h = e.getAttribute("data-page-url");
                        if (h) {
                            this.pages_loading[a] = !0;
                            var d = e.getElementsByClassName(this.config.loading_indicator_cls)[0];
                            "undefined" === typeof d && (d = this.loading_indicator.cloneNode(!0),
                                d.classList.add("active"), e.appendChild(d));
                            var f = this,
                                g = new XMLHttpRequest;
                            g.open("GET", h, !0);
                            g.onload = function() {
                                if (200 === g.status || 0 === g.status) {
                                    var b = document.createElement("div");
                                    b.innerHTML = g.responseText;
                                    for (var d = null, b = b.childNodes, e = 0, h = b.length; e < h; ++e) {
                                        var p = b[e];
                                        if (p.nodeType === Node.ELEMENT_NODE && p.classList.contains(CSS_CLASS_NAMES.page_frame)) {
                                            d = p;
                                            break
                                        }
                                    }
                                    b = f.pages[a];
                                    f.container.replaceChild(d, b.page);
                                    b = new Page(d);
                                    f.pages[a] = b;
                                    b.hide();
                                    b.rescale(f.scale);
                                    disable_dragstart(d.getElementsByClassName(CSS_CLASS_NAMES.background_image));
                                    f.schedule_render(!1);
                                    c && c(b)
                                }
                                delete f.pages_loading[a]
                            };
                            g.send(null)
                        }
                        void 0 === b && (b = this.config.preload_pages);
                        0 < --b && (f = this, setTimeout(function() {
                            f.load_page(a + 1, b)
                        }, 0))
                    }
                },
                pre_hide_pages: function() {
                    var a = "@media screen{." + CSS_CLASS_NAMES.page_content_box + "{display:none;}}",
                        b = document.createElement("style");
                    b.styleSheet ? b.styleSheet.cssText = a : b.appendChild(document.createTextNode(a));
                    document.head.appendChild(b)
                },
                render: function() {
                    for (var a = this.container, b = a.scrollTop, c = a.clientHeight, a = b - c, b =
                            b + c + c, c = this.pages, e = 0, h = c.length; e < h; ++e) {
                        var d = c[e],
                            f = d.page,
                            g = f.offsetTop + f.clientTop,
                            f = g + f.clientHeight;
                        g <= b && f >= a ? d.loaded ? d.show() : this.load_page(e) : d.hide()
                    }
                },
                update_page_idx: function() {
                    var a = this.pages,
                        b = a.length;
                    if (!(2 > b)) {
                        for (var c = this.container, e = c.scrollTop, c = e + c.clientHeight, h = -1, d = b, f = d - h; 1 < f;) {
                            var g = h + Math.floor(f / 2),
                                f = a[g].page;
                            f.offsetTop + f.clientTop + f.clientHeight >= e ? d = g : h = g;
                            f = d - h
                        }
                        this.first_page_idx = d;
                        for (var g = h = this.cur_page_idx, k = 0; d < b; ++d) {
                            var f = a[d].page,
                                l = f.offsetTop + f.clientTop,
                                f = f.clientHeight;
                            if (l > c) break;
                            f = (Math.min(c, l + f) - Math.max(e, l)) / f;
                            if (d === h && Math.abs(f - 1) <= EPS) {
                                g = h;
                                break
                            }
                            f > k && (k = f, g = d)
                        }
                        this.cur_page_idx = g
                    }
                },
                schedule_render: function(a) {
                    if (void 0 !== this.render_timer) {
                        if (!a) return;
                        clearTimeout(this.render_timer)
                    }
                    var b = this;
                    this.render_timer = setTimeout(function() {
                        delete b.render_timer;
                        b.render()
                    }, this.config.render_timeout)
                },
                register_key_handler: function() {
                    var a = this;
                    window.addEventListener("DOMMouseScroll", function(b) {
                        if (b.ctrlKey) {
                            b.preventDefault();
                            var c = a.container,
                                e = c.getBoundingClientRect(),
                                c = [b.clientX - e.left - c.clientLeft, b.clientY - e.top - c.clientTop];
                            a.rescale(Math.pow(a.config.scale_step, b.detail), !0, c)
                        }
                    }, !1);
                    window.addEventListener("keydown", function(b) {
                        var c = !1,
                            e = b.ctrlKey || b.metaKey,
                            h = b.altKey;
                        switch (b.keyCode) {
                            case 61:
                            case 107:
                            case 187:
                                e && (a.rescale(1 / a.config.scale_step, !0), c = !0);
                                break;
                            case 173:
                            case 109:
                            case 189:
                                e && (a.rescale(a.config.scale_step, !0), c = !0);
                                break;
                            case 48:
                                e && (a.rescale(0, !1), c = !0);
                                break;
                            case 33:
                                h ? a.scroll_to(a.cur_page_idx - 1) : a.container.scrollTop -=
                                    a.container.clientHeight;
                                c = !0;
                                break;
                            case 34:
                                h ? a.scroll_to(a.cur_page_idx + 1) : a.container.scrollTop += a.container.clientHeight;
                                c = !0;
                                break;
                            case 35:
                                a.container.scrollTop = a.container.scrollHeight;
                                c = !0;
                                break;
                            case 36:
                                a.container.scrollTop = 0, c = !0
                        }
                        c && b.preventDefault()
                    }, !1)
                },
                rescale: function(a, b, c) {
                    var e = this.scale;
                    this.scale = a = 0 === a ? 1 : b ? e * a : a;
                    c || (c = [0, 0]);
                    b = this.container;
                    c[0] += b.scrollLeft;
                    c[1] += b.scrollTop;
                    for (var h = this.pages, d = h.length, f = this.first_page_idx; f < d; ++f) {
                        var g = h[f].page;
                        if (g.offsetTop + g.clientTop >=
                            c[1]) break
                    }
                    g = f - 1;
                    0 > g && (g = 0);
                    var g = h[g].page,
                        k = g.clientWidth,
                        f = g.clientHeight,
                        l = g.offsetLeft + g.clientLeft,
                        m = c[0] - l;
                    0 > m ? m = 0 : m > k && (m = k);
                    k = g.offsetTop + g.clientTop;
                    c = c[1] - k;
                    0 > c ? c = 0 : c > f && (c = f);
                    for (f = 0; f < d; ++f) h[f].rescale(a);
                    b.scrollLeft += m / e * a + g.offsetLeft + g.clientLeft - m - l;
                    b.scrollTop += c / e * a + g.offsetTop + g.clientTop - c - k;
                    this.schedule_render(!0)
                },
                fit_width: function() {
                    var a = this.cur_page_idx;
                    this.rescale(this.container.clientWidth / this.pages[a].width(), !0);
                    this.scroll_to(a)
                },
                fit_height: function() {
                    var a = this.cur_page_idx;
                    this.rescale(this.container.clientHeight / this.pages[a].height(), !0);
                    this.scroll_to(a)
                },
                get_containing_page: function(a) {
                    for (; a;) {
                        if (a.nodeType === Node.ELEMENT_NODE && a.classList.contains(CSS_CLASS_NAMES.page_frame)) {
                            a = get_page_number(a);
                            var b = this.page_map;
                            return a in b ? this.pages[b[a]] : null
                        }
                        a = a.parentNode
                    }
                    return null
                },
                link_handler: function(a) {
                    var b = a.target,
                        c = b.getAttribute("data-dest-detail");
                    if (c) {
                        if (this.config.view_history_handler) try {
                            var e = this.get_current_view_hash();
                            window.history.replaceState(e,
                                "", "#" + e);
                            window.history.pushState(c, "", "#" + c)
                        } catch (h) {}
                        this.navigate_to_dest(c, this.get_containing_page(b));
                        a.preventDefault()
                    }
                },
                navigate_to_dest: function(a, b) {
                    try {
                        var c = JSON.parse(a)
                    } catch (e) {
                        return
                    }
                    if (c instanceof Array) {
                        var h = c[0],
                            d = this.page_map;
                        if (h in d) {
                            for (var f = d[h], h = this.pages[f], d = 2, g = c.length; d < g; ++d) {
                                var k = c[d];
                                if (null !== k && "number" !== typeof k) return
                            }
                            for (; 6 > c.length;) c.push(null);
                            var g = b || this.pages[this.cur_page_idx],
                                d = g.view_position(),
                                d = transform(g.ictm, [d[0], g.height() - d[1]]),
                                g = this.scale,
                                l = [0, 0],
                                m = !0,
                                k = !1,
                                n = this.scale;
                            switch (c[1]) {
                                case "XYZ":
                                    l = [null === c[2] ? d[0] : c[2] * n, null === c[3] ? d[1] : c[3] * n];
                                    g = c[4];
                                    if (null === g || 0 === g) g = this.scale;
                                    k = !0;
                                    break;
                                case "Fit":
                                case "FitB":
                                    l = [0, 0];
                                    k = !0;
                                    break;
                                case "FitH":
                                case "FitBH":
                                    l = [0, null === c[2] ? d[1] : c[2] * n];
                                    k = !0;
                                    break;
                                case "FitV":
                                case "FitBV":
                                    l = [null === c[2] ? d[0] : c[2] * n, 0];
                                    k = !0;
                                    break;
                                case "FitR":
                                    l = [c[2] * n, c[5] * n], m = !1, k = !0
                            }
                            if (k) {
                                this.rescale(g, !1);
                                var p = this,
                                    c = function(a) {
                                        l = transform(a.ctm, l);
                                        m && (l[1] = a.height() - l[1]);
                                        p.scroll_to(f, l)
                                    };
                                h.loaded ?
                                    c(h) : (this.load_page(f, void 0, c), this.scroll_to(f))
                            }
                        }
                    }
                },
                scroll_to: function(a, b) {
                    var c = this.pages;
                    if (!(0 > a || a >= c.length)) {
                        c = c[a].view_position();
                        void 0 === b && (b = [0, 0]);
                        var e = this.container;
                        e.scrollLeft += b[0] - c[0];
                        e.scrollTop += b[1] - c[1]
                    }
                },
                get_current_view_hash: function() {
                    var a = [],
                        b = this.pages[this.cur_page_idx];
                    a.push(b.num);
                    a.push("XYZ");
                    var c = b.view_position(),
                        c = transform(b.ictm, [c[0], b.height() - c[1]]);
                    a.push(c[0] / this.scale);
                    a.push(c[1] / this.scale);
                    a.push(this.scale);
                    return JSON.stringify(a)
                }
            };
            pdf2htmlEX.Viewer = Viewer;
        })();
    </script>
    <script>
        try {
            pdf2htmlEX.defaultViewer = new pdf2htmlEX.Viewer({});
        } catch (e) {}
    </script>
    <title></title>
</head>

<body onload="window.print()">
    <div id="sidebar">
        <div id="outline">
        </div>
    </div>
    <div id="page-container">
        <div id="pf1" class="pf w0 h0" data-page-no="1">
            <div class="pc pc1 w0 h0"><img class="bi x0 y0 w1 h1" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAA40AAARjCAIAAABE31YSAAAACXBIWXMAABYlAAAWJQFJUiTwAAAgAElEQVR42uzdeXyNZ/7/8es+52TfhUhCFrGHWJLIhhS1VYsqVarV0kVaWsX3222m085MO2amliqliqrSolSpdtRaguyJLKVIIpLIIpFE9u2cc//+uH493zMJiqLMvJ5/eNy57+vc5z7nPn+8Xfd1fS5FVVUBAAAA3GU0fAUAAAAgpwIAAADkVAAAAJBTAQAAAHIqAAAAyKkAAAAAORUAAAAgpwIAAICcCgAAAJBTAQAAQE4FAAAAyKkAAAD4L6DjK/hd+Pn53bsXv3nz5tDQUG4iAAC4rehPBQAAwN2I/tTfWUpKyj10tUFBQaqqctcAAAA59T+fpaXl+vXrFy5ceJdf58aNG0NDQ2VIJaoCAABy6n8FrVZrYWHRqVOnu/PyKioqKisrLSwsTHsUReGuAQAAcuo9LyEh4Vc7IA0Gw4QJE+7O6z927FhiYqJOpxNCqKqqKMq+fftaN/P393dwcOB2AwAAcuo94+mnn25oaLhGA43mHpjNJvtTZU5dv379+vXrWzTYsmVLSEgItxsAAJBT7zGqqjo6OrbYKR+gX+djdJkR7/yVyzeV/akODg6tU3VVVRUjAQAAADn1nkyoQoja2tqTJ09eLQheT84zGAzLly8fP378Ha69Kq9N9qfGx8e3btCtWzdLS0smVwEAAHLqPaapqcmU8z777LPPPvusRYPa2trrOU9+fv7999+fn5+fn58/aNAgrVZ7Jz/FE088IbtUzR0+fFj8Mm6BnAoAAMip9xgZ4FasWCGEqKmpuXTp0tXaXNu2bdvOnDkjhOjVq1dKSkp4eHhYWNgd+xSXL19uvdNoNGo0mjFjxuzbt49H/wAAgJx6L9m7d6+MoSNHjhRCHDp0yMLCYs6cOTd6nvr6+pdffllu9+7de/Xq1Vu2bFm9evWoUaN8fX1v60eIiIiIiIhovX/ZsmWHDh0aPny4HIfwyiuvREdHm5evAgAA+C1YN/V2KSgo6Ny58wsvvCCEmDZtmuxuPHv27BNPPHETZ3v//feXLFmi1+v1ev3gwYMHDhwYFRWVkJCwefPmPXv2/C4fsE+fPmfPnhVCyE908eLF7t27T5s2jVsPAADIqXeXqKgoPzODBw+WT/Pd3NyGDx8uhPjhhx+srKycnZ1v9MxGo9He3n7OnDkajUZRlKFDhyqKIgcSfPnll2fOnElOTr7zn9fZ2fmHH36QG1FRUXZ2dkKI2NhYv38nsywAAAA59S6i1+v/9Kc/HTp0SBYWXbBgQf/+/W/iPPHx8fX19fPmzdNoNFqtdvbs2aqqbtiwQQgREhKSkZFx4MCBOz+NqX///tnZ2f7+/kKIOXPmxMfH9+zZ02g0ct8BAMAtwfjUWy89PV2YzYI/dOjQiRMn1q9f37Fjx5ub+WQ0GlNSUuTG008/7e3tffjw4YSEBH9///Xr14eGhm7atGnGjBmTJ0/u2LHjnfykkyZN+vrrr6dOnTpw4MAxY8Zs27bNdMFCiD59+vBjAAAA5NS7iEyof/zjH3fu3Gnaqarq5MmTb+6EFy9elKMFunfvHhkZefToUfFLT2qfPn2+/vrrkJCQkpKShISEO5xTvb29582bt2TJkoyMjI8//lh+zE2bNt1ctzEAAAA59Q6lVVVVw8PDhRDdunVzdXW96VM5ODg8//zzffv27devX0REhKIoy5cvf+mll7Ra7bp16/bt2/f222+/8sormzdvjomJueLc/Ntq/vz5Z8+eLSsrE0LExsZSoAoAAJBT7wEyp/5GI0aMUBSltrZ29OjRQgij0bhq1aqXXnpJCBEWFhYWFvbyyy9XV1dPnTp13Lhxbdu27dKli9FobGpqamhoqKioKCoqunDhwrlz5xoaGpycnGbOnOni4nJrP2a3bt3kRmxsLDcdAACQU/+LqKpqa2srt93c3Fr3WTo4ODg4OBw4cODrr79uampSFEWr1drZ2dna2nbo0CEoKEiOGZUVA1auXNm9e3dbW9vOnTu7ubnx9QIAAHIqbgE7O7urPVt3d3efPXv2r54hNDR0wYIFjz/+eExMTHZ29i3p9AUAACCn/jdqamoybTc3N//GswUHB+fm5i5fvvynn37q1auXqqp3flQrAADAtVE/9a6Qm5t7/PjxKx5KS0s7evSoqqpGo1FVVVVV3d3df/s7moJpYmJiSUnJFdvk5eVVV1eXlpbu3bs3MzOTsacAAOBOoj/1rvD1118LIQYOHNj60MGDB3fs2NG9e/du3bpdvHixqKjI1tZ25cqV9fX1NjY2N/2OFy5ckBu2traOjo5XbOPq6vryyy+b73nmmWfoeQUAAOTU/wpZWVmJiYkjR47ct2/fFRsoiqLT6Xr16tW7d+/Bgwe/9NJLDQ0NQogNGzZERUXd9PsWFhaa4ukVF5Favnz5iRMnWuzs1asXtwwAANwZPPf/Pen1+tTU1LFjxzo5OV2jmcFgUBQlKCgoIiIiIiJi2LBhqqrKuvrXKTQ0tMUea2vrRYsWye3ExMTWL2lubm4xW0uv169du5a7BgAA7gz6U383xcXFX3zxxaOPPiqEyMrKCggIuFrLmJiYhoaGoqIi08jU+fPnb9myxd/f/+TJk8XFxRcuXBgwYMAVX/uvf/1r69atRUVFCQkJISEhcqfsQB0yZEhTU5OlpaVcQMtcbm7uP//5T7m9bt262tpajUaTnJxsOgMAAMDtRn/qnbZu3bqYmBghRE5OzqxZs9q0aSP3jxgx4ortx44dm5mZmZWVdfjw4YSEBNP+Hj16yGKoDzzwQHx8vP4XTU1NlZWV69ev9/X19ff3f/XVVxMTE/Py8v7nf/7H9FrTxCm9Xi+E8Pf3b/GmFy5cePDBB+X20aNH7ezsbGxsBg0a9FtW1QIAALgh9KfeUbW1tRUVFVVVVUKI7Oxs2YeamZlZXV19tZd06dLlq6+++uijjz755JPU1NTVq1fPmjVLCGE0GmUFgKamptTU1NZjVYcPH962bduuXbueP3/ez89v0aJFEydOfPXVV0NDQx0cHBRFGTBgwKuvvnrx4sWIiAgHBwfza+jatevixYttbW2Tk5PNx6RqtVpuIgAAIKf+B0pLS3v88cczMzNVVW3btq1MrocPH24xrb6FyZMnf/TRR76+vtu2bVu+fLncqSiKr69vdHS0RqO5dqF+X1/fuXPnpqWlff3115MmTZo/f35ERERDQ8Njjz32+uuv5+TkrFix4u233545c6apc9fNzW3x4sVPP/10izOXl5fLt1ZVlbsJAABuK57731FGo9HR0dHBweHQoUMajSYvLy8pKWnSpElxcXHXfuHs2bP79Okzffr0xx577P//D0OnGzVqVEZGRnBw8K++r729fWxs7KZNmxYvXvz8889v27YtKirKw8Nj+vTpzz777Pbt23U6nRyNYLJgwYLc3NyUlJTjx4+fP3/+7NmzTU1NDzzwQGNjo6IoDQ0NWVlZ3FAAAHD70J96R8n+SB8fn++//97KyurkyZOBgYFbtmzp3bv3r77Wy8vLy8vr/+6cTnf8+PEhQ4ZERkZeT++mt7f3li1b6urqhBDFxcU//vjjhAkTvL29vb29r9YdGxgYKDeqq6tdXFyeeuop86MrV67khgIAgNuH/tQ7ysLCQgih1WotLCwcHR07duzo7u7+wgsvXK3S/rVPVVhYKIeoXv+rmpub/f39jUZjaWnp9b8qIyPjiSeeaLEzPj6eGwoAAMip/1EuX75sZWXl5OT0wAMPdOjQYceOHe3bt7+JnFpRUdGixOmvqqurGzlypE6n69u37/W/KjY2Vs6gWr58+ezZs/V6fdeuXZubm7mVAACAnPofJTc3VwjRuXNnIURhYWH79u27dOlyoyfRarWNjY03Op+ppKREURSDwXDFNaiuSFXVGTNmyG1ra+vevXsvWLDg9ddft7W15VYCAABy6j1PzpF3dnaW2+KXqqWHDx8eNWrUzdw5jcba2vr6+1NjYmK++eabsrKympoaOUz2+q98z549Qgi9Xh8fH29padmnTx+ZX7mtAADg9mEe1R3yySefeHl59enTZ+PGjQaDITQ0NDMz89SpU2PGjLm5ExYUFAwaNOh6Wubn52/evHnNmjUfffRRY2Pjzp07Z82adY2Kra1ZWlrOnz+/qqrKfMaVi4sLtxUAANw+9KfeITU1NT4+Prm5uY899lj79u0VRXFwcPDz86uvr7+Js0VHR0dHRw8cOPBf//rXrzbesWOHjY3N7NmzT58+nZOTM3HixDVr1rReg+oaHn30USsrK3t7++PHj8fGxjY1NTU1NWVkZNxQ2AUAALgh9KfeCaWlpc3NzV5eXsnJyeHh4R07dgwPD1+0aNGMGTPOnj3btWvXGzqboihHjhwRQrzzzjuvvfbar7afO3euaXvAgAFCiMcff/xGP4IcQbtt27YffvhB7hk6dOjq1av37ds3f/58bjEAACCn3qs51d3dXQjh5eVVWlpaWVm5Zs2aCRMmqKp6E6M8VVV966237vynUBTFfJRCjx49li5dqtfr586da6q0CgAAQE69l9ja2lZUVMiIuWnTJktLS1kzf/Xq1ePGjbtXPsWSJUvS0tJa/oB0ul69enGLAQDALcf41DvBx8fHYDCY/pTz5RsaGhRFudGH/r+XuLi4Y8eOySqq1dXVH3zwgV6vF0IUFxcnJCRwiwEAwC1Hf+qdoChKY2Njenq6LCMla+yfPHnylVdeubVvtHjxYo3m3/7voarq/ffff0NV/a+oqalJFtUSQmzcuNHBwaFHjx46nc7Kyupqy64CAACQU+8Bb7zxxoEDB1RV1ev1Go0mMTGxuLi4Rab8jbZv3976hIqiHDp06MSJE8OGDfP29r75H4pOt2LFCrldWlrq7e39xhtvyD9jYmK4vwAA4Jbjuf+d07lz559++qljx447duxIT0+fOnXqLTx5UlJSfn7+1Y5WVFRs3779t5zf1dX16NGjNjY2NjY25nl38eLF/fr14+YCAIBbjv7U2y4tLc3KyqpHjx6dOnXq27evjY2Nl5dXx44dGxoarK2tb8lbnDlz5ujRo9duoyjKkiVLBgwYYGVlFRIScqNv0b179/Ly8uTk5KCgoLq6urS0NHt7+4qKitDQUBZQBQAA5NR70vHjx11dXUtKSiIjI/V6vRzNefHixejo6EcfffS3n//y5cvXU+1fRtWkpCQhxNGjR+fMmWNlZXVDbxQeHh4fH7948eKuXbvu2rVLCGEwGPr06XOdy2IBAADcEJ7733Y1NTUjRoxobm4+f/68jY2NEGLr1q2nT5+uq6v77SfPyMhYv379Dd91jeajjz46cuTINYYKXFGfPn3Cw8NN07+0Wm1CQkJNTU1sbCw3GgAA3Fr0p97+/wpoNFqtNjQ09MsvvwwICPjss898fHyCgoLKysp+45nXrFlTU1Nzc69VFCUlJSUlJcXLy2vSpEnX+ark5OQWsdjOzm7u3LmVlZULFixg4j8AALiVIYqv4HbTarW1tbVCiB49euTl5el0Orl4qZub202fs6GhYevWrTcdUs3l5+d/9dVXJSUl19M4KCjItB0fH2/adnJykqVVAQAAyKn3jIiIiLNnzwohmpubCwoKJkyYIH7pZL25Ex49enTVqlWFhYW36goLCgq++OKLXy3Xn5WVJWv7S1FRUV999ZXpz9LSUu41AAC4hXjuf9uFhobKWUfW1taWlpaqqgohvvzyy9GjR9/QecrLy0+fPl1QUHDhwoXbcZ3Hjh0zGAzXeHbv5+e3ffv2rKwsjUZTV1cXFRW1Z8+e0tLSxsbGXbt2BQQEcK8BAAA59R7j5uamKIpOp+vcubMQIjk5ubCwsGPHjtf58n379v30009yLavbR1GUuLg4IcTVoqpGo3F1de3fv79pj5zpb2VldenSJfP9AAAA5NR7Q9++fQ8fPlxRUdGhQ4fExMTLly//6U9/uvZLVFWNi4vLycm5ePGiDJF35lLj4uIURQkLC7vi0a5du8bGxrYIsnv37r3lC8ACAACQU28vuaZot27dxowZExsbe/HixU6dOg0dOlQIcfLkyV69el3xVbGxsceOHdPpfp+7Exsbm5+ff8Xart7e3lZWVj/88ENERERGRoaiKDExMVOnTr21C8ACAAAI5lHdbgaDQVVVUy2n0aNH9+3b12g0Ll26dP/+/VeLtnFxcb9XSJUuXLiwZMmSKx5q3769k5PTjh071q1bFxISotVqO3TowI0GAADk1HuPoijjx49fvHhxQUGBfHy/d+/eBx988IqdqbGxseb1nn7fy05MTGwdu2NjY9u1a3f06FFFUWbNmvXqq6/u3r2buwwAAMip9xidTldcXOzp6RkVFZWfn280GhctWuTi4uLp6dl6yKnsSb17Lv7YsWMt9iQkJKxdu3bhwoWmPdOnT9+2bdvVOl8BAADIqXepzp07yzJSqqp6eHikp6f37du3d+/eQohLly6ZtywrK0tMTNRqtRqNRvl3Vzu5cnUajUaWaJV0Op1Op7O4JtlGtjddw+LFi03ru6qq2qdPH9O7nzlzRm5YWFjExcWxdCoAALi1mEd1e7m5uRkMBrnt4eGRmZn58MMPyz99fX3NW7q6us6dO/du/iwHDx4MDQ01/fnOO+9s3rxZbjs4OBiNRm43AAAgp95LQkJCMjIyAgICrKysTLOjNm7c+NBDD5k3q66ubmpq0mg0zs7OrftQVVWtr69vaGgQv3Sj2tvbt5hrpapqZWWl0WhUVVVRFPmvoijW1tbW1tYtzmlqLISwsLCws7Mz77uVr62oqFBV1cXFRe4PDg7+4YcfkpOTu3btmpub27lz56effnrx4sX29vaHDx+W6xcAAACQU+8ZAwcO/PDDDwMCAnx9fevr64UQycnJjo6OXl5e5s1sbW1LSkqEEOXl5Vqt1sPDw8rKSgiRlZWl1Wpb91aWlZUJIVxdXZ2dneWec+fO/crN1umMRqOlpWVjY+MVY6Up3ZofNeVmZ2fnjh07yuKpco6/j4/P5MmTa2pqampqZsyYwb0GAADk1HvMhAkTVqxYcd999128eDEpKamoqGjatGkt2piXIDUYDKbFURVFucYj9bKysvLycisrK9nVem16vV4IcY2WMp62iLDmHbHNzc0trvnxxx8/fvy4paWli4sLNxoAANxCzKO6E7y8vF5//XW9Xl9UVJSQkDB16tSbO4+VlVWnTp18fX3btWun1WpN4dI8emq12jZt2ri5uVlaWl57FSudTufn59e5c2cvLy/T2cx5e3t37tzZ/CSRkZFLly41bxMbG6vRaAYMGMBdBgAAtxb9qbddUVFRU1OTj4/PoEGDSkpKJk6cKPd/8cUXU6ZMMQVERVE8PT0tLCyqq6uNRqNer29oaLCxsdHpdIqitBi06ujo6OjoqKpqbW1tY2NjZWWls7OzjY2NjY2NqTfU3t5e/NId29jY2NDQYDpkOqHcY2lp2WJSl2Q0GisqKlp0lL700ktr1qyZOHHimTNnSktLXV1dBw4cyF0GAADk1HtPbW3t7t27VVWdP3++q6ur3Hn06NH6+vpVq1bNmTPH1PLSpUvNzc2+vr6tlyGV057KyspMj+bbtm3r7Oxsb29vb28vT6uqal5eXutH805OTk5OTjY2Ni1OmJubK0cCODg4tG3b1jSPSnbQFhUVqaqq0+la5NTly5fLFVOFENOmTSOkAgAAcuq9ql27doGBgaqqbtu2raKiYsiQIXl5eRcuXJg8efLatWvNW9rZ2VVUVOTk5CiKYmVlZWtrK4SoqqqSi6+at1QUpaysrKysTPahWltb19fXV1RUtH532ScqD2k0GjnUtcVMqerq6urq6itevI+Pj2k7KyuroaFh+/btpp7duXPnvvXWW+Hh4S3mhAEAAJBT7wFOTk5CiODg4MTExLy8PCFEbGzs2LFjxb9PUTInezSvZ2pUfX29rCFwPUzzscwHAFyjnpR5t25zc/POnTt//vln8wYhISF79+599913ucsAAICces8wz6C1tbUyqp48eVKv17dr106GxRYZ0cXFxcrKqrGxUfahtjihs7OzRqOxsbGxsrIyGAy1tbUGg6GhocGUU2XHqkajkcVQa2pqFEWRfbEGg6Gqqsr8kpydnbVarZOTk6Ioer2+trZWFl41Xbmp3JWUmJj4008/XfGTjho16s9//vOECRNap1sAAABy6u8vICBg3759pj/lU3vznKooSkBAwPLly+WqTjk5OS0K9ctX2dnZtWnTRgZZvV4vVzFtedt0OtlNK50/f97Hx8e8Sr/4pR/XtNPNza31NcuWLc4mGY3GyspK0+DUvLw885oAvr6+8fHx7du3F0IMGDDg/PnzpkNt27Y1P4+dnR2/DQAAQE79PT333HOLFy82/Smn20udOnVKTEwcMGCATJxy0OelS5eioqLMz6AoSnZ2trW1tY2NjVardXZ2lpP9a2trm5qazFeQkonWyspKjk/19fVVVbWioqKxsVFm4hbZVy4ZoNVqZTKWZzONZzU1MLl8+bKqqjIuSy4uLsOGDZs4caKiKDk5OePGjXvrrbc++eQT0apj2N3d3fxUHh4e/DYAAAA59fdkaWkpNwwGg1arNV+GNDg4ODY2du/eveHh4UlJSRUVFXl5eTJxxsTEREREmE7i5+d37tw5OTL10qVL13i7urq6uro6mTXt7Oxax9MWLX/1VC12ytpVpj8dHR3vv/9+GXN79OghhMjPz3/88cf1en1JScmwYcNMr5JZvKmpSe5hGAAAACCn3i0KCgq8vb1bjD0NDw+PiYmJi4sTQuTk5GRlZc2bN2/JkiUWFhbmOVVRFAsLixa1pVpkRxcXF0VRCgsLTSNTzUOqRqPx9vaWQbm4uLi2tvZqM6U6d+4shFBVtaqqyjwTW1lZdezYsUXjwMDARYsWvf7666Y9Xl5ecpr/kSNH+vXrJ/59VlZSUhK/BAAAQE69uxw6dOjpp5+Wia2kpMTNzS0vL+/SpUvh4eFZWVkeHh6ZmZmzZ88+ffp0QECAtbX16dOnZQ+lKf8pilJRUWGeL2UZVPOJUJ6enkKIhoYG2Ruq0+kcHR1lkVSNRlNVVWVtbe3m5mbKjg0NDY2NjXJbq9U6ODhUVVU5OjoqiiILrF77Q1lZWQ0ePDg3N9e8UlV+fv7mzZufeOIJ+WdGRobpmt98801+CQAAgJx6d6mpqRFCyEfkOTk5bm5ulZWVR44cOXLkyEMPPRQeHp6ammppaVlSUhIeHl5ZWfnFF1+Y51RVVQsKCjp06NCiapUcBpqbm2sqBWBlZeXp6WltbW2ad1VYWNi6mpWFhUXHjh3lsFe5x2g05uXl6fX6srIyb29vjUZjqvCvqmpxcbGVlZVpSQKTgQMHrl279plnnsnLy5Npddu2ba+++qp5QDfNtbp48eIV12IFAAAgp/4OHnrooe+++05uz5w5c8WKFXIQakBAwP79+5955pljx44VFRX5+PgYjcaSkhIhhKOjo4WFhflJZGGpc+fOWVpaysnyqqoajcaqqqoWb9fY2JiTk6PRaJydnc3nRbXQ3Nyck5NzxUNGo9F8qr5Ji6JUQojLly9nZGSEhITU1dV5eXk1NjauXr168uTJ5m30ev1zzz0nTytDqpxoBQAAQE79nU2bNu277747ceKE+GValek5uI2NTVJS0n333VdZWfnVV1+lpqZeY8VRFxeX8vLypqYm02ykazAajeXl5TdxtaqqXm2hAfOiWvIttm3btm/fPjs7O1Mvqaqq1tbW5m0URZGfWn4DQojhw4fzqwAAAOTU35+c2x4bGyv/9PX1zcjIkNOkXnjhhS1btgghnJycevbsaVrYKT8//4oVRj08PBobG1sEUAsLC3t7ezs7OxkHm5ub5Qwq2UzW+ZcLAciLMRW0kt2xMjSrquro6Ojg4GBjYyMnUZkGEiiKIk9i/qbFxcV5eXnHjx9v8Rw/MjLy888/N41YkKsAyI5Y+Q206CcGAAAgp9521dXVDg4Orff37t1bmFVi2rlzp5wIL/n4+FRUVLi4uAwaNMiUU0tLS59++umdO3c+/PDD5qeytbW1tbV1cXExn03VovvT0tJSBlZnZ+f8/Hw5s0oIYTQa5eJSdnZ2phBsXn7faDTKi5STqK79YXNyctauXdt6f0BAQHp6uimnysQ8ZcoU0zfw6KOP3tC3BwAAYI7alr+i9bQkIYSDg4Ofn1/rAaOmiUpTp04VQuh0uubm5uTkZLkzJCTk9OnTRUVFQoj+/fvn5+cLISorKy0tLRsaGrZv397ibJWVlWVlZebvUl1dXV5eXlhYmP2LnJycS5cuXb582cvLq76+vqysTO7Mzc09f/68bFNUVFRu5vz58zk5OefOnSsrKzPfX1ZWZird2uIy+vbtK7tIDQbDsmXLTGsNvPbaa+np6XK7qKiovr5eJlT5WcaOHdv6q4uPjz916lTr/QaDQa/X83sDAADk1OuVmprq5+d3xXlI/fv3b73z/vvvF0JkZGTIPx955JEjR47Iba1WO3To0N27d+/fv3/AgAGlpaW5ubnt2rXLzs52d3dXVdU0YEBycnLSaDSXLl0694uSkpKKigpT2VTxy+qm5eXl586dKywsvHz5cutLkssBmMin/KqqXr582Xz/5cuX/fz8Wjz0l5f98ssvv/POO7179w4ICNi7d29mZqY8NGzYsD179sjt8+fPb9y4UW7LKWKtJ2PFx8dPmzat9RX+4Q9/6NatW+tVZAEAwH8zksGvCAsLa9eu3ZQpU6KiombMmGHaHx4eXlxcLEegmj/FXrVqVbdu3YQQ+/fvHzFihIeHh6IosoqqEEKn082fP//UqVPp6en9+vXbt2/fiy++uHLlyrFjxwYHB5syn4mNjU2Lsv/W1tamFVOFEA0NDfX19U1NTfKxu5OTk1arVVXV1ta2rq5OFk9tbGyU0VZVVTn8tE2bNvX19aadQgjz1bNakCMHTFP7tVrtnj17utKEwRoAACAASURBVHfvLrNply5dhBAnT540GAxyJK6pUpX8HkySkpLmzZvn5OTk6Oho2llVVRUVFRUTE7Njxw5+bAAAwBz9qb8uPj6+Q4cO+/fv9/PzM03A/+KLL1xcXGbNmhUVFfVvwV+na9++vRBCdjqOHz9eCJGdnS2P5uTkXL58uWfPnuHh4UOHDjUYDCkpKUII+ZLWQ0Wtra29vb07m+nQoYOLi4utra1MljY2Nm3atHF3d5dH27Zt6+Li0qZNGxlG5baHh4efn5+fn1/nzp09PT1lsVX5wjZt2ri6urq6usrGV/z4LfKrwWBIS0uTZfy/++67Rx55RAixb98++UmFEP/617+EEH369DF/YWFh4eTJk8eOHVtRUdGzZ0/TzpCQEH9/f41GExgYyC8NAAD8W6ziK7geQ4cOraqq6ty58/Tp0z/44AN3d3dTgFMUJS4uLiwszNR47ty5b7755rZt21588UUfHx8bG5ucnJzw8HAhxLlz5y5duuTu7l5bW6soynPPPXf48GHTC+U8fXNVVVUnT568M5/R0dGxV69e5ntqa2tlV/Hx48f9/f1NQXbQoEGxsbGjRo1qbm6eNm2aHBQhV2Hdtm2bbPPNN9+Yn2rjxo3PPPOM+Z7du3d/9tlnjz/+eHJy8oEDB/iNAQAAcurNmDx58uzZs4OCgvr27RsREZGSkuLs7Czn/fTq1euxxx47duyYXOxeCDFkyBAhRGlpqZzYHh8f36dPH1msNDIycsWKFQ8++KAQorm5+dNPP5VT75uamlqHVJkdY2NjNRrN7V7bqbm5WSZp6fDhwykpKZcuXXJ1dR0+fPhf/vKXwYMHT58+XfbFCiG6d++ek5MjB5sWFxcLIWSF/wsXLgghBg8ebN6ZumTJkoSEhODgYNNMqSNHjmzYsCE4OFgI4eTk5Ofnx28MAAC0oJiXPcI1TJkypW/fvkIIg8Fw5syZjRs3DhkyZNSoUUIIVVU1Gs3rr79uahwSEnLp0iWDwXDq1ClFUaZNm3bixIkFCxYIIeLj43Nzc8eMGSNb7t69u7i4uG/fviEhIXFxccOHDz927JhWqw0MDJTJtbi4ODo6usXKT7dWfn7+tm3bnn/+eXt7eyHE8ePH27dvv3DhQvM2qqpGRUW1adOmpKSkvr7e1tbWlGuXLFny1FNPvfrqq0ajsXfv3hqNZtu2bUFBQfJodXV1//79Z86cqShKaWnpd999t3///ieffHLUqFEajSY/P/+VV15pMZIVAABA0J96/V555ZWvv/66TZs2Wq22vr7ez8+vXbt2/z/sK4qp+JSUkJDg5+en1Wo/+uijOXPmhIWFpaWlRUdHR0ZGhoaGGo3Gr776SkbPsWPHrlmzJjs7W1atGj58uFar7dGjx65du2QDd3d3Z2fnRYsW3cb/rCjKlClTZEi9fPnyiRMnZs6c2brN6tWre/bsOWPGDFdXV9P+d99919raWs6d8vf3l3P2TSFVCHHq1Klnn31W/neopqZGp9MNHTpUdr4KIfLy8gipAACAnPqbDBgwYOrUqU8//bSlpWVQUFBjY6N5qVF3d/euXbuaCjYJIZ577rk1a9bExcXNmTNn9uzZy5Ytu3jxojwkeyJ3797t6enZr1+/CRMm7NixIzY2VvbXCiEsLS379u27b9++kSNHCiECAwO9vb0PHz4sJ9TfQjk5OUVFRUOGDOnQoYPc8/PPP8+ZM+fUqVNVVVXmE/OlgQMHmofUCxcu2NnZPfvss0KImJgYGVJbFIKdP3/+Qw89JLednZ0bGxtHjx4t/6yrq3vsscf4aQEAgCviuf8NqKiomDlzZkhIiPwzLy/P29vbdDQ+Pv7tt982FVWtqanp06ePECI0NHTdunVCiMjIyAEDBvj7+8sGsmCq+TjO+vr6YcOGxcTEBAQEKIqSkpJiY2MzYMAAeTQ7O/vw4cOTJ0++WgGpG1VVVXXw4MEnn3zSfOeRI0fuu+8+o9EYHx/f0NCg0Wj69es3f/58eXT27NnmE/PXrVvn5ua2c+dOIcTo0aMvXLgwa9as1157zdRg8ODBffr06dixo/zTaDQmJCTIOWcGg2HdunWZmZmUTQUAAFdEXaob4OLiYl4G3zykyjxqmu0uhLC3t9+0aZPMr8uWLRNCPPbYYz/88MP//RdBUSIiIsLNVFZWNjU16XQ6WawqMDCwpqbG1L5z586lpaXy0C2xdevWTp06tdgpP6BGo5GVs/z8/Ewro4pfJvVLMTExlZWVMqR26tRJzqAyr9JVV1dXUFBgCqnytKbCCCkpKQsWLCCkAgAAcuqt8dprryUmJl7taItRqhEREbJ79dixY6qqvvjii56enp999pn5AqF6vT47OzsxMfH06dN9+/Zdvny5q6trUlKSPHrp0iXzE77++utFRUUtdt6cb7/9NiQkZNCgQS32m9ZElVxdXWUAlSorK+VGQ0NDWlraX//6VyHEjz/+KNcCeP75581LwKanp5ue+LdWV1c3Z84cflEAAICcemv069cvNTX1akdtbW137dplvufDDz8UQvz888/du3dXFGX8+PEVFRWmpKuq6vLlyw8cOHD+/Hm5JpOiKN9++22vXr1kGzm3ydyDDz54/Pjx3/gpEhIS2rVrN3DgwNaHzBdllZ9o+fLlpj8LCgrkZa9ataqurk4W+X/xxReFEOHh4eYVD4QQn376qYeHx9Wu4c9//jM/JwAAcA3ad955h2/hhjQ3N6enp8t1UFto06bN+++/P3fuXNMeR0fH8PDw7du3a7XavLy8N99802g0fvPNN6qqenl5KYri6elZVVUVHh4eGBgYHBzs6upaV1d3/vz5kpISVVWbm5u7du1q/hayWNXBgwddXV1bp9jrkZycnJ+fP3r0aAsLC/P9RqMxLi6urq5OLoVq4unpuXDhwsrKylmzZo0aNcrS0nLbtm3V1dXr169XVTUkJEQ+u//+++9blIBdtWqVj4/PFa9h69ats2bNar3+FgAAgAnzqG7GhAkTTLOphBAnT56Mjo7WaDRCCI1Gk5CQ0LZtW/P27733npxKdeTIEVdX1+XLl69evTo0NFTO31dVdfHixeYjOw8cOCAXeVJV1TSHyZzBYPjggw+ioqJu9PZ9//33hYWFc+fOlVdr7uOPP541a5ZpkS357hcvXty6davBYAgKCoqMjBRCLFq0SKvVnjhxwsLC4q9//evWrVuFEKdOnTIfuSuE2L1798svv6z+YtKkSaYyXnq9fv369efOneOHBAAAyKm32PTp03v27FlQUFBQUKDX6zUaTUBAgK2trV6vP336dFNTU0pKypkzZ0wdlnq9fvTo0efOnQsKCpKBdfny5WvXrg0LC5NRNS8vLzc3t7GxUVXVTp061dbWxsXF1dbW6nS6AQMGmK8U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AOhUAADQqQAAoFMBANCpAACgUwEA0KkAAKBTAQDQqQAAoFMBAECnAgCgUwEAQKcCAKBTAQBApwIAoFMBAECnAgCATgUAQKcCAIBOBQBApwIAgE4FAECnAgCATgUAAJ0KAIBOBQAAnQoAgE4FAACdCgCATgUAAJ0KAAA6FQAAnQoAADoVAACdCgAAOhUAAHQqAAA6FQAAdCoAADoVAAB0KgAAOhUAAHQqAADoVAAAdCoAAOhUAAB0KgAA6FQAAHQqAADoVAAA0KkAAOhUAADQqQAA6FQAANCpAADoVAAA0KkAAKBTAQDQqQAAoFMBANCpAACgUwEA0KkAAKBTAQBApwIAoFMBAECnAgCgUwEAQKcCAKBTAQBApwIAgE4FAECnAgCATgUAQKcCAIBOBQBApwIAgE4FAACdCgCATgUAAJ0KAIBOBQAAnQoAgE4FAACdCgAAOhUAAJ0KAAA6FQAAnQoAADoVAACdCgAAOhUAAHQqAAA6FQAAdCoAADoVAAB0KgAAOhUAAHQqAADoVAAAdCoAAOhUAAB0KgAA6FQAANCpAADoVAAA0KkAAOhUAADQqQAA6FQAANCpAACgUwEA0KkAAKBTAQDQqQAAoFMBANCpAACgUwEAQKcCAKBTAQBApwIAoFMBAECnAgCgUwEAQKcCAIBOBQBApwIAgE4FAECnAgCATgUAQKcCAIBOBQAAnQoAgE4FAACdCgCATgUAAJ0KAIBOBQAAnQoAADoVAACdCgAAOhUAAJ0KAAA6FQAAnQoAADoVAAB0KgAAOhUAAHQqAAA6FQAAdCoAADoVAAB0KgAA6FQAAHQqAADoVAAAdCoAAOhUAAB0KgAA6FQAANCpAADoVAAA0KkAAOhUAADQqQAAoFMBANCpAACgUwEA0KkAAKBTAQDQqQAAoFMBAECnAgCgUwEAQKcCAKBTAQBApwIAoFMBAECnAgCATgUAQKcCAIBOBQBApwIAgE4FAECnAgCATgUAAJ0KAIBOBQAAnQoAgE4FAACdCgCATgUAAJ0KAAA6FQAAnQoAADoVAACdCgAAOhUAAJ0KAAA6FQAAdCoAADoVAAB0KgAAOhUAAHQqAAA6FQAAdCoAAOhUAAB0KgAA6FQAAHQqAADoVAAAdCoAAOhUAADQqQAA6FQAANCpAADoVAAA0KkAAOhUAADQqQAAoFMBANCpAACgUwEA0KkAAKBTAQDQqQAAoFMBAECnAgCgUwEAQKcCAKBTAQBApwIAgE4FAECnAgCATgUAQKcCAIBOBQBApwIAgE4FAACdCgCATgUAAJ0KAIBOBQAAnQoAgE4FAACdCgAAOhUAAJ0KAAA6FQAAnQoAADoVAACdCgAAOhUAAHQqAAA6FQAAdCoAADoVAAB0KgAAOhUAAHQqAADoVAAAdCoAAOhUAAB0KgAA6FQAAHQqAADoVAAA0KkAAOhUAADQqQAA6FQAANCpAADoVAAA0KkAAKBTAQDQqQAAoFMBANCpAACgUwEA0KkAAKBTAQBApwIAoFMBAECnAgCgUwEAQKcCAKBTAQBApwIAgE4FAECnAgCATgUAQKcCAIBOBQAAnQoAgE4FAACdCgCATgUAAJ0KAIBOBQAAnQoAADoVAACdCgAAOhUAAJ0KAAA6FQAAnQoAADoVAAB0KgAAOhUAAHQqAAA6FQAAdCoAADoVAAB0KgAA6FQAAHQqAADoVAAAdCoAAOhUAAB0KgAA6FQAANCpAADoVAAA0KkAAOhUAADQqQAA6FQAANCpAACgUwEA0KkAAKBTAQDQqQAAoFMBANCpAACgUwEAQKcCAKBTAQBApwIAoFMBAECnAgCgUwEAQKcCAIBOBQBApwIAgE4FAECnAgCATgUAQKcCAIBOBQAAnQoAgE4FAACdCgCATgUAAJ0KAIBOBQAAnQoAADoVAACdCgAAOhUAAJ0KAAA6FQAAdCoAADoVAAB0KgAAOhUAAHQqAAA6FQAAdCoAAOhUAAB0KgAA6FQAAHQqAADoVAAAdCoAAOhUAADQqQAA6FQAANCpAADoVAAA0KkAAOhUAADQqQAAoFMBANCpAACgUwEA0KkAAKBTAQDQqQAAoFMBAECnAgCgUwEAQKcCAKBTAQBApwIAoFMBAECnAgCATgUAQKcCAIBOBQBApwIAgE4FAECnAgCATgUAAJ0KAIBOBQAAnQoAgE4FAACdCgCATgUAAJ0KAAA6FQAAnQoAADoVAACdCgAAOhUAAJ0KAAA6FQAAdCoAADoVAAB0KgAAOhUAAHQqAADoVAAAdCoAAOhUAAB0KgAA6FQAAHQqAADoVAAA0KkAAOhUAADQqQAA6FQAANCpAADoVAAA0KkAAKBTAQDQqQAAoFMBANCpAACgUwEA0KkAAKBTAQBApwIAoFMBAECnAgCgUwEAQKcCAKBTAQBApwIAgE4FAECnAgCATgUAQKcCAIBOBQBApwIAgE4FAACdCgCATgUAAJ0KAIBOBQAAnQoAgE4FAACdCgAAOhUAAJ0KAAA6FQAAnQoAADoVAACdCgAAOhUAAHQqAAA6FQAAdCoAADoVAAB0KgAAOhUAAHQqAADoVAAAdCoAAOhUAAB0KgAA6FQAAHQqAADoVAAA0KkAAOhUAADQqQAA6FQAANCpAACgUwEA0KkAAKBTAQDQqQAAoFMBANCpAACgUwEAQKcCAKBTAQBApwIAoFMBAECnAgCgUwEAQKcCAIBOBQBApwIAgE4FAECnAgCATgUAQKcCAIBOBQAAnQoAgE4FAACdCgCATgUAAJ0KAIBOBQAAnQoAADoVAACdCgAAOhUAAJ0KAAA6FQAAnQoAADoVAAB0KgAAOhUAAHQqAAA6FQAAdCoAADoVAAB0KgAAnC0TAMClJEbgK20fXvdPBQBgog0sr3Vwhm9QwgAAAABJRU5ErkJggg==" />
                <div class="c x1 y1 w0 h2">
                    <div class="t m0 x2 h3 y2 ff1 fs0 fc0 sc0 ls0 ws0">PEMERINTAH KABUPATEN KUNINGAN</div>
                    <div class="t m0 x3 h3 y3 ff1 fs0 fc0 sc0 ls0 ws0">KECAMATAN SALAJAMBE</div>
                    <div class="t m0 x4 h3 y4 ff1 fs0 fc0 sc0 ls0 ws0">DESA SALAJAMBE</div>
                    <div class="t m0 x5 h3 y5 ff1 fs0 fc0 sc0 ls0 ws0">Jl. Siliwangi No. 72 Desa Salajambe</div>
                    <div class="t m0 x6 h3 y6 ff1 fs0 fc0 sc0 ls0 ws0">Kode pos 45566</div>
                </div>
                <div class="t m0 x7 h3 y7 ff1 fs0 fc0 sc0 ls0 ws0">SURAT KETERANGAN DOMISILI</div>
                <div class="t m0 x8 h4 y8 ff2 fs0 fc0 sc0 ls0 ws0">Nomor : <?= $nomor; ?></div>
                <div class="t m0 x9 h4 y9 ff2 fs0 fc0 sc0 ls0 ws0">Dengan Ini Kepala <span class="_ _0"></span>Desa Salajambe Kecamatan <span class="_ _0"></span>Salajambe Kabupaten Kuningan, <span class="_ _0"></span>menerangkan </div>
                <div class="t m0 xa h4 ya ff2 fs0 fc0 sc0 ls0 ws0">dengan sebenarnya bahwa :</div>
                <div class="t m0 x9 h4 yb ff2 fs0 fc0 sc0 ls0 ws0">NIK<span class="_ _1"> </span>: <?= $kependudukan['nik']; ?></div>
                <div class="t m0 x9 h4 yc ff2 fs0 fc0 sc0 ls0 ws0">Nama<span class="_ _2"> </span>: <?= $kependudukan['nama_lengkap']; ?></div>
                <div class="t m0 x9 h4 yd ff2 fs0 fc0 sc0 ls0 ws0">Tempat/ Tanggal Lahir<span class="_ _3"> </span>: <?= $kependudukan['tempat_lahir']; ?>, <?= $kependudukan['tgl_lahir']; ?></div>
                <div class="t m0 x9 h4 ye ff2 fs0 fc0 sc0 ls0 ws0">Jenis Kelamin<span class="_ _4"> </span>: <?php if ($kependudukan['jenkel'] == "L") {
                                                                                                                    echo "Laki laki";
                                                                                                                } else {
                                                                                                                    echo "Perempuan";
                                                                                                                } ?></div>
                <div class="t m0 x9 h4 yf ff2 fs0 fc0 sc0 ls0 ws0">Agama<span class="_ _5"> </span>: <?php switch ($kependudukan['agama']) {
                                                                                                            case 1:
                                                                                                                echo "Islam";
                                                                                                                break;
                                                                                                            case 2:
                                                                                                                echo "Kristen";
                                                                                                                break;
                                                                                                            case 3:
                                                                                                                echo "Hindu";
                                                                                                                break;
                                                                                                            default:
                                                                                                                echo "Budha";
                                                                                                        } ?></div>
                <div class="t m0 x9 h4 y10 ff2 fs0 fc0 sc0 ls0 ws0">Pekerjaan<span class="_ _6"> </span>: <?= $kependudukan['pekerjaan']; ?></div>
                <div class="t m0 x9 h4 y11 ff2 fs0 fc0 sc0 ls0 ws0">Status Perkawinan<span class="_ _7"> </span>: <?php switch ($kependudukan['status_perkawinan']) {
                                                                                                                        case 1:
                                                                                                                            echo "Kawin";
                                                                                                                            break;
                                                                                                                        case 2:
                                                                                                                            echo "Belum Kawin";
                                                                                                                            break;
                                                                                                                        case 3:
                                                                                                                            echo "Cerai";
                                                                                                                            break;
                                                                                                                        default:
                                                                                                                            echo "Cerai Mati";
                                                                                                                    } ?></div>
                <div class="t m0 x9 h4 y12 ff2 fs0 fc0 sc0 ls0 ws0">Kewarganegaraan<span class="_ _8"> </span>: <?php if ($kependudukan['kewarganegaraan'] == "1") {
                                                                                                                    echo "Warga Negara Indonesia";
                                                                                                                } else {
                                                                                                                    echo "Warga Negara Asing";
                                                                                                                } ?></div>
                <div class="t m0 x9 h4 y13 ff2 fs0 fc0 sc0 ls0 ws0">Alamat<span class="_ _9"> </span>: <?= $kependudukan['alamat']; ?></div>
                <div class="t m0 x9 h4 y14 ff2 fs0 fc0 sc0 ls0 ws0">Orang <span class="_ _a"></span>tersebut <span class="_ _a"></span>diatas, <span class="_ _a"></span>adalah <span class="_ _a"></span>benar-benar <span class="_ _a"></span>warga <span class="_ _a"></span>kami <span class="_ _a"></span>dan <span class="_ _a"></span>berdomisili <span class="_ _a"></span>di <span class="_ _a"></span>RT <span class="_ _a"></span><?= $kk['rt']; ?> <span class="_ _a"></span>RW <span class="_ _a"></span><?= $kk['rw']; ?> <span class="_ _a"></span>Desa </div>
                <div class="t m0 xa h4 y15 ff2 fs0 fc0 sc0 ls0 ws0">Salajambe Kecamatan Salajambe Kabuoaten Kuningan . </div>
                <div class="t m0 xa h4 y16 ff2 fs0 fc0 sc0 ls0 ws0">Demikian surat keterangan ini dibuat, untuk dapat dipergunakan sebagaimana mestinya.</div>
                <div class="t m0 xb h4 y17 ff2 fs0 fc0 sc0 ls0 ws0">Kuningan,<?= $date; ?></div>
                <div class="t m0 xb h4 y18 ff2 fs0 fc0 sc0 ls0 ws0">Kepala Desa Salahambe</div>
            </div>
            <div class="pi" data-data='{"ctm":[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}'></div>
        </div>
    </div>
    <div class="loading-indicator">
        <img alt="" src="data:image/png;base64,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" />
    </div>
</body>

</html>