from django.db import connections
from django_nose import NoseTestSuiteRunner


class TestRunner(NoseTestSuiteRunner):
    
    def setup_databases(self, *args, **kw):
        if 'test' in connections:
            connection = connections['test']
            # don't create the test database but use the one from settings
            return [(connection, connection.settings_dict['NAME'], False)], []
        return super(TestRunner, self).setup_databases(*args, **kw)
        
