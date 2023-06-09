<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Thread Model
 *
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\MessageHistoryTable&\Cake\ORM\Association\HasMany $MessageHistory
 *
 * @method \App\Model\Entity\Thread newEmptyEntity()
 * @method \App\Model\Entity\Thread newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Thread[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Thread get($primaryKey, $options = [])
 * @method \App\Model\Entity\Thread findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Thread patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Thread[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Thread|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Thread saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Thread[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Thread[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Thread[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Thread[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ThreadTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('thread');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('MessageHistory', [
            'foreignKey' => 'thread_id',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('name')
            ->maxLength('name', 255)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->scalar('user_id')
            ->maxLength('user_id', 255)
            ->notEmptyString('user_id');

        $validator
            ->scalar('prompt_id')
            ->maxLength('prompt_id', 255)
            ->requirePresence('prompt_id', 'create')
            ->notEmptyString('prompt_id');

        $validator
            ->scalar('message_id')
            ->maxLength('message_id', 255)
            ->requirePresence('message_id', 'create')
            ->notEmptyString('message_id');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn('user_id', 'Users'), ['errorField' => 'user_id']);

        return $rules;
    }
}
