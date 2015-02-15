"""
Django settings for wpkit_test project.

For more information on this file, see
https://docs.djangoproject.com/en/1.6/topics/settings/

For the full list of settings and their values, see
https://docs.djangoproject.com/en/1.6/ref/settings/
"""

import os
import sys


# Build paths inside the project like this: os.path.join(BASE_DIR, ...)
BASE_DIR = os.path.dirname(os.path.dirname(__file__))


# Quick-start development settings - unsuitable for production
# See https://docs.djangoproject.com/en/1.6/howto/deployment/checklist/

# SECURITY WARNING: keep the secret key used in production secret!
SECRET_KEY = 'a*6ps!c2p5bdc+p$0sky7snma!5h3-)k2*-km^ne41^_d%a#8('

# SECURITY WARNING: don't run with debug turned on in production!
DEBUG = True

TEMPLATE_DEBUG = True

ALLOWED_HOSTS = []


# Application definition

INSTALLED_APPS = (
    'django.contrib.admin',
    'django.contrib.auth',
    'django.contrib.contenttypes',
    'django.contrib.sessions',
    'django.contrib.messages',
    'django.contrib.staticfiles',
    'django_nose',
    'wpkit',
)

MIDDLEWARE_CLASSES = (
    'django.contrib.sessions.middleware.SessionMiddleware',
    'django.middleware.common.CommonMiddleware',
    'django.middleware.csrf.CsrfViewMiddleware',
    'wpkit.middleware.WpKitBlogRoutingMiddleware',
    'django.contrib.auth.middleware.AuthenticationMiddleware',
    'django.contrib.messages.middleware.MessageMiddleware',
    'django.middleware.clickjacking.XFrameOptionsMiddleware',
)

TEMPLATE_LOADERS = (
    'wpkit.template_loader.Loader',
    'django.template.loaders.filesystem.Loader',
    'django.template.loaders.app_directories.Loader'
)

TEMPLATE_CONTEXT_PROCESSORS = (
    "django.contrib.auth.context_processors.auth",
    "django.core.context_processors.debug",
    "django.core.context_processors.i18n",
    "django.core.context_processors.media",
    "django.core.context_processors.static",
    "django.core.context_processors.tz",
    "django.core.context_processors.request",
    "django.contrib.messages.context_processors.messages",
    'wpkit.context_processors.wpkit',
)

ROOT_URLCONF = 'wpkit_test.urls'

WSGI_APPLICATION = 'wpkit_test.wsgi.application'

#TEST_RUNNER = 'django_nose.NoseTestSuiteRunner'
TEST_RUNNER = 'wpkit_test.test_runner.TestRunner'

# Database
# https://docs.djangoproject.com/en/1.6/ref/settings/#databases

DATABASES = {
    'default': {
        'ENGINE': 'django.db.backends.mysql',
        'NAME': 'wordpress',
        'USER': 'spritz',
        'PASSWORD': 'spritz',
        'HOST': '/var/run/mysqld/mysqld.sock',
    }
}

# Internationalization
# https://docs.djangoproject.com/en/1.6/topics/i18n/

LANGUAGE_CODE = 'en-us'

TIME_ZONE = 'Europe/Rome'

USE_I18N = True

USE_L10N = True

USE_TZ = False


# Static files (CSS, JavaScript, Images)
# https://docs.djangoproject.com/en/1.6/howto/static-files/

STATIC_URL = '/static/'

if 'test' in sys.argv:
    PASSWORD_HASHERS = (
        'django.contrib.auth.hashers.MD5PasswordHasher',
    )
    #DATABASES['default']['ENGINE'] = 'django.db.backends.sqlite3'
    DATABASES['test'] = DATABASES['default']
elif DEBUG:
    # force a blog id to make runserver work for development
    WPKIT_DEBUG_BLOG_ID = 1
    # pick a template dir for the blog
    WPKIT_BLOGS = {
        (1, 1): {
            'template_dir':os.path.join(BASE_DIR, 'wpkit/tests/templates/blog_1'),
            'date_format': 'd F Y',
        }
    }
            

# WpKit configuration

WPKIT_WP_ROOT = os.path.dirname(BASE_DIR) #'/var/www'
#WPKIT_DB_CONNECTION = 'default'
