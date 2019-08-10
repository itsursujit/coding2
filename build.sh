#!/bin/bash

BRANCH=$(git rev-parse --abbrev-ref HEAD)
pull(){
    git pull origin $BRANCH
}
commit(){
    pull
    CURRENTEPOCTIME=`date +"%s"`
    CURRENT_DATETIME=`date +"%Y-%m-%d %T"`
    backup_branch="backup-${CURRENTEPOCTIME}"
    git checkout -b $backup_branch
    git add . --all
    git commit -am "Automatic backup done on: ${CURRENT_DATETIME}"
    git push origin $backup_branch
}

check_commit(){
    echo ========== CHECKING FOR CHANGES ========
    changes=$(git diff)
    if [ -n "$changes" ]; then
        echo ""
        echo "*** CHANGES FOUND ***"
        echo "${#changes[@]}"
        echo ""
        echo "You have uncomitted changes."
        commit;
    else
        echo "... No changes found"
    fi
}

check_commit
