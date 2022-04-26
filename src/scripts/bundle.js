// import lazySizes from "lazysizes";
// import "lazysizes/plugins/native-loading/ls.native-loading";
// import "lazysizes/plugins/object-fit/ls.object-fit";
// import "what-input";
import lightGallery from 'lightgallery';

import lgThumbnail from 'lightgallery/plugins/thumbnail';
// import lgZoom from 'lightgallery/plugins/zoom';

if (document.querySelector(".lightbox")) {
  lightGallery(document.querySelector("body"), {
    plugins: [lgThumbnail],
    selector: ".lightbox",
  });
}

import "./modal";
import "./form";
import "./drawer";
import "./menuScrollTo";
import "./inputFile";
import "./common";
import "./tabs";

/**
 * LazySizes configuration
 * https://github.com/aFarkas/lazysizes/#js-api---options
 */
// lazySizes.cfg.nativeLoading = {
//   setLoadingAttribute: false,
// };
