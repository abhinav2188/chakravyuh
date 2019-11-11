@extends('layouts.master')

@section('main')

<div class="sm:text-xs block ">

    <div class="md:w-1/3 w-1/2 mx-auto absolute-center-40" id="icon">
      <svg  viewBox="0 0 601 601" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M600 300.5C600 255.159 589.706 210.41 569.893 169.627C550.08 128.845 521.267 93.0923 485.625 65.0665C449.983 37.0408 408.444 17.4731 364.138 7.83906C319.833 -1.79501 273.918 -1.24401 229.857 9.4505L237.864 33.2418C202.767 41.4674 169.634 56.5252 140.356 77.5556C111.079 98.586 86.2302 125.177 67.2293 155.811C48.2284 186.444 35.4473 220.52 29.6157 256.093C23.7842 291.666 25.0163 328.04 33.2418 363.136L57.455 356.886C47.8804 315.616 48.9725 272.588 60.6283 231.857C72.284 191.126 94.1196 154.034 124.077 124.077L141.754 141.755C167.829 115.68 199.924 96.4302 235.205 85.7053C270.485 74.9804 307.864 73.111 344.039 80.2623C380.213 87.4136 414.069 103.365 442.615 126.708C471.16 150.051 493.517 180.065 507.708 214.1L480.959 227.941C492.668 257.063 497.156 288.586 494.038 319.818L454.115 317.011C451.301 343.196 441.84 368.227 426.63 389.727C411.421 411.226 390.968 428.481 367.215 439.853C343.461 451.225 317.195 456.337 290.91 454.702C264.625 453.067 239.194 444.741 217.033 430.513L230.021 403.13C246.931 414.743 266.448 421.997 286.838 424.248L297.715 379.951C280.824 379.359 264.561 373.399 251.287 362.937C238.013 352.475 228.419 338.054 223.898 321.769C219.376 305.483 220.162 288.181 226.142 272.372C232.122 256.564 242.984 243.073 257.152 233.858L272.108 259.952C277.433 256.224 283.44 253.58 289.787 252.173C296.133 250.767 302.694 250.623 309.096 251.752C315.498 252.881 321.614 255.26 327.097 258.752C332.579 262.245 337.32 266.783 341.048 272.108" stroke="#fff" stroke-opacity="0.05"/>
        <path d="M599.782 311.789C598 359.02 585.065 405.158 562.035 446.432C539.005 487.705 506.533 522.942 467.275 549.262C428.017 575.582 383.087 592.236 336.159 597.864C289.231 603.493 241.638 597.934 197.269 581.644L206.955 558.566C152.182 538.713 105.146 501.948 72.6532 453.591C40.1602 405.233 23.8955 347.792 26.2126 289.578L51.1737 291.063C52.6622 251.718 63.4415 213.283 82.6303 178.902C101.819 144.52 128.873 115.168 161.579 93.2458C194.285 71.3232 231.715 57.4526 270.809 52.7678C309.903 48.083 349.551 52.7171 386.511 66.2913L375.562 88.9173C403.347 98.7752 428.918 114.009 450.815 133.749C472.713 153.49 490.507 177.35 503.184 203.967C515.86 230.585 523.169 259.438 524.695 288.88C526.22 318.323 521.931 347.777 512.073 375.562L483.405 366.634C467.437 410.795 436.031 447.688 394.985 470.501C353.939 493.315 306.025 500.508 260.09 490.752C214.154 480.997 173.299 454.951 145.068 417.425C116.837 379.899 103.135 333.426 106.493 286.587L146.633 286.469C144.42 310.75 147.984 335.21 157.035 357.849C166.086 380.489 180.367 400.665 198.71 416.727C217.052 432.79 238.936 444.284 262.572 450.269C286.207 456.253 310.924 456.559 334.701 451.161L332.019 420.938C347.836 416.799 362.683 409.584 375.711 399.706C388.74 389.829 399.695 377.482 407.952 363.371C416.209 349.259 421.606 333.66 423.834 317.462C426.062 301.265 425.078 284.788 420.938 268.971C416.798 253.155 409.584 238.308 399.706 225.279C389.829 212.251 377.482 201.295 363.37 193.039C349.259 184.782 333.659 179.385 317.462 177.157C301.265 174.929 284.788 175.913 268.971 180.053L277.265 224.465C287.25 221.414 297.737 220.36 308.129 221.363C318.521 222.365 328.614 225.405 337.831 230.308C347.048 235.211 355.209 241.881 361.848 249.938C368.488 257.995 373.475 267.281 376.526 277.265L347.832 286.023C350.889 296.02 350.702 306.727 347.298 316.611" stroke="#5edfff" stroke-opacity="0.05"/>
        <path d="M5.34743 351.367C-7.02892 279.562 7.19566 205.708 45.3571 143.637C83.5185 81.5654 142.999 35.5345 212.659 14.1653L222 37C287.786 18.4605 362.159 24.4171 423.288 54.9914C484.416 85.5657 531.94 137.845 556.563 201.604L533.286 210.725C547.453 247.462 552.724 287.03 548.668 326.195C544.613 365.359 531.346 403.008 509.952 436.062C488.558 469.117 459.645 496.639 425.576 516.378C391.508 536.117 353.251 547.513 313.934 549.633L306.753 524.908C273.009 525.849 239.486 519.168 208.68 505.362C177.875 491.556 150.579 470.98 128.825 445.166C107.071 419.352 91.4187 388.965 83.0327 356.265C74.6467 323.565 73.743 289.395 80.389 256.298L109.79 262.263C114.811 237.219 124.715 213.41 138.938 192.194C153.16 170.977 171.422 152.77 192.681 138.612C213.94 124.454 237.779 114.621 262.838 109.676C287.897 104.731 313.684 104.769 338.728 109.79L329.007 148.649C297.419 142.718 264.768 146.786 235.601 160.285C206.434 173.785 182.203 196.044 166.283 223.963L190.523 242.133C203.85 217.02 225.37 197.226 251.506 186.039C277.643 174.852 306.82 172.948 334.189 180.642C361.557 188.335 385.469 205.164 401.947 228.331C418.426 251.497 426.48 279.606 424.77 307.984L379.743 306.823C378.549 321.785 373.143 336.103 364.151 348.121C355.159 360.139 342.949 369.367 328.933 374.736L317.73 346.898C309.308 350.026 300.194 350.803 291.365 349.146C282.535 347.489 274.323 343.46 267.609 337.492C260.895 331.524 255.931 323.84 253.251 315.266C250.57 306.692 250.273 297.55 252.392 288.82" stroke="#5edfff" stroke-opacity="0.05"/>
        <circle r="7" fill="white">
          <animateMotion dur="6s" repeatCount="indefinite" path="M600 300.5C600 255.159 589.706 210.41 569.893 169.627C550.08 128.845 521.267 93.0923 485.625 65.0665C449.983 37.0408 408.444 17.4731 364.138 7.83906C319.833 -1.79501 273.918 -1.24401 229.857 9.4505L237.864 33.2418C202.767 41.4674 169.634 56.5252 140.356 77.5556C111.079 98.586 86.2302 125.177 67.2293 155.811C48.2284 186.444 35.4473 220.52 29.6157 256.093C23.7842 291.666 25.0163 328.04 33.2418 363.136L57.455 356.886C47.8804 315.616 48.9725 272.588 60.6283 231.857C72.284 191.126 94.1196 154.034 124.077 124.077L141.754 141.755C167.829 115.68 199.924 96.4302 235.205 85.7053C270.485 74.9804 307.864 73.111 344.039 80.2623C380.213 87.4136 414.069 103.365 442.615 126.708C471.16 150.051 493.517 180.065 507.708 214.1L480.959 227.941C492.668 257.063 497.156 288.586 494.038 319.818L454.115 317.011C451.301 343.196 441.84 368.227 426.63 389.727C411.421 411.226 390.968 428.481 367.215 439.853C343.461 451.225 317.195 456.337 290.91 454.702C264.625 453.067 239.194 444.741 217.033 430.513L230.021 403.13C246.931 414.743 266.448 421.997 286.838 424.248L297.715 379.951C280.824 379.359 264.561 373.399 251.287 362.937C238.013 352.475 228.419 338.054 223.898 321.769C219.376 305.483 220.162 288.181 226.142 272.372C232.122 256.564 242.984 243.073 257.152 233.858L272.108 259.952C277.433 256.224 283.44 253.58 289.787 252.173C296.133 250.767 302.694 250.623 309.096 251.752C315.498 252.881 321.614 255.26 327.097 258.752C332.579 262.245 337.32 266.783 341.048 272.108" />
        </circle>
        <circle r="5" fill="#454545">
          <animateMotion dur="9s" repeatCount="indefinite" path="M599.782 311.789C598 359.02 585.065 405.158 562.035 446.432C539.005 487.705 506.533 522.942 467.275 549.262C428.017 575.582 383.087 592.236 336.159 597.864C289.231 603.493 241.638 597.934 197.269 581.644L206.955 558.566C152.182 538.713 105.146 501.948 72.6532 453.591C40.1602 405.233 23.8955 347.792 26.2126 289.578L51.1737 291.063C52.6622 251.718 63.4415 213.283 82.6303 178.902C101.819 144.52 128.873 115.168 161.579 93.2458C194.285 71.3232 231.715 57.4526 270.809 52.7678C309.903 48.083 349.551 52.7171 386.511 66.2913L375.562 88.9173C403.347 98.7752 428.918 114.009 450.815 133.749C472.713 153.49 490.507 177.35 503.184 203.967C515.86 230.585 523.169 259.438 524.695 288.88C526.22 318.323 521.931 347.777 512.073 375.562L483.405 366.634C467.437 410.795 436.031 447.688 394.985 470.501C353.939 493.315 306.025 500.508 260.09 490.752C214.154 480.997 173.299 454.951 145.068 417.425C116.837 379.899 103.135 333.426 106.493 286.587L146.633 286.469C144.42 310.75 147.984 335.21 157.035 357.849C166.086 380.489 180.367 400.665 198.71 416.727C217.052 432.79 238.936 444.284 262.572 450.269C286.207 456.253 310.924 456.559 334.701 451.161L332.019 420.938C347.836 416.799 362.683 409.584 375.711 399.706C388.74 389.829 399.695 377.482 407.952 363.371C416.209 349.259 421.606 333.66 423.834 317.462C426.062 301.265 425.078 284.788 420.938 268.971C416.798 253.155 409.584 238.308 399.706 225.279C389.829 212.251 377.482 201.295 363.37 193.039C349.259 184.782 333.659 179.385 317.462 177.157C301.265 174.929 284.788 175.913 268.971 180.053L277.265 224.465C287.25 221.414 297.737 220.36 308.129 221.363C318.521 222.365 328.614 225.405 337.831 230.308C347.048 235.211 355.209 241.881 361.848 249.938C368.488 257.995 373.475 267.281 376.526 277.265L347.832 286.023C350.889 296.02 350.702 306.727 347.298 316.611"   />
        </circle>
        <circle r="3" fill="#ddd">
          <animateMotion dur="4s" repeatCount="indefinite" path="M5.34743 351.367C-7.02892 279.562 7.19566 205.708 45.3571 143.637C83.5185 81.5654 142.999 35.5345 212.659 14.1653L222 37C287.786 18.4605 362.159 24.4171 423.288 54.9914C484.416 85.5657 531.94 137.845 556.563 201.604L533.286 210.725C547.453 247.462 552.724 287.03 548.668 326.195C544.613 365.359 531.346 403.008 509.952 436.062C488.558 469.117 459.645 496.639 425.576 516.378C391.508 536.117 353.251 547.513 313.934 549.633L306.753 524.908C273.009 525.849 239.486 519.168 208.68 505.362C177.875 491.556 150.579 470.98 128.825 445.166C107.071 419.352 91.4187 388.965 83.0327 356.265C74.6467 323.565 73.743 289.395 80.389 256.298L109.79 262.263C114.811 237.219 124.715 213.41 138.938 192.194C153.16 170.977 171.422 152.77 192.681 138.612C213.94 124.454 237.779 114.621 262.838 109.676C287.897 104.731 313.684 104.769 338.728 109.79L329.007 148.649C297.419 142.718 264.768 146.786 235.601 160.285C206.434 173.785 182.203 196.044 166.283 223.963L190.523 242.133C203.85 217.02 225.37 197.226 251.506 186.039C277.643 174.852 306.82 172.948 334.189 180.642C361.557 188.335 385.469 205.164 401.947 228.331C418.426 251.497 426.48 279.606 424.77 307.984L379.743 306.823C378.549 321.785 373.143 336.103 364.151 348.121C355.159 360.139 342.949 369.367 328.933 374.736L317.73 346.898C309.308 350.026 300.194 350.803 291.365 349.146C282.535 347.489 274.323 343.46 267.609 337.492C260.895 331.524 255.931 323.84 253.251 315.266C250.57 306.692 250.273 297.55 252.392 288.82" />
        </circle>
      </svg>
    </div>

    <div class="md:w-1/2 w-2/3 title absolute-center-40">
      <svg version="1.1" viewBox="0 0 600 600" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <text x="50%" y="50%" text-anchor="middle" dominant-baseline="middle" font-size="5rem" fill="#ffdc34" >CHAKRAVYUH</text>
      </svg>
    </div>

    <timer class="timer-position"></timer>

    <div class="h-full" id="about">
      <div class="w-1/2 mx-auto my-24 ">
        <h1 class="text-4xl mb-6 text-black font-bold">About Chakravyuh</h1>
        <p class="text-sm text-gray-700">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam mollis, massa eget molestie accumsan, risus diam lacinia mi, ac tempus nunc tortor sed sem. Sed laoreet, massa in aliquet feugiat, dui est ultrices odio, quis scelerisque turpis purus quis quam. Vivamus urna nunc, semper eget condimentum eget, molestie nec sem. Integer in odio eros. Etiam et feugiat quam. Sed condimentum sem at justo vulputate, a convallis nibh commodo. Nullam faucibus ipsum quis tincidunt aliquam. In ac porttitor magna. Aliquam nisl quam, interdum at lacus ut, accumsan rhoncus quam. Nunc justo ligula, blandit fringilla eleifend sit amet, elementum sit amet nibh. Mauris aliquam semper eros a vehicula. Duis imperdiet odio fermentum, dignissim leo eu, placerat odio. Duis vestibulum vulputate elementum.
        </p>
      </div>
      <div class="logins ">
        <h3 class="text-lg mb-4 text-gray-900">To get updates about chakravyuh, login using google or facebook</h3>
        <a href="#" class="border border-black rounded p-2 m-1 bg-gray-900 hover:bg-gray-100 hover:text-black">FB Login</a>
        <a href="#" class="border border-black rounded p-2 m-1 bg-gray-100 text-black">G Login</a>
      </div>

      </div>

</div>
@endsection
