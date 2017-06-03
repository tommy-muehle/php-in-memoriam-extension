#ifndef PHP_IN_MEMORIAM_H
#define PHP_IN_MEMORIAM_H

#define PHP_IN_MEMORIAM_EXT_NAME  "in_memoriam"
#define PHP_IN_MEMORIAM_EXT_VERSION  "1.0"

#ifdef HAVE_CONFIG_H
#include "config.h"
#endif /* HAVE_CONFIG_H */

#include "php.h"

#ifdef ZTS
#include "TSRM.h"
#endif

#if defined(ZTS) && defined(COMPILE_DL_IN_MEMORIAM)
ZEND_TSRMLS_CACHE_EXTERN()
#endif

#endif /* PHP_IN_MEMORIAM_H */
